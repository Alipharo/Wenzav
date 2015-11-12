<?php

App::uses('AppController', 'Controller');

/**
 * Characters Controller
 *
 * @property Character $Character
 * @property PaginatorComponent $Paginator
 */
class CharactersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Character->recursive = 1;
        $this->set('characters', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Character->exists($id)) {
            throw new NotFoundException(__('Invalid character'));
        }

        $options = array('conditions' => array('Character.' . $this->Character->primaryKey => $id));
        $this->set('character', $this->Character->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->Session->read('Auth.User.active') == 0) {
            $this->Session->setFlash(__('Ce compte n\'a pas encore été activé.'), 'flash/error');
            $this->redirect('/');
        } else if ($this->request->is('post')) {
            $this->Character->create();
            if ($this->Character->save($this->request->data)) {
                $this->Session->setFlash(__('The character has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The character could not be saved. Please, try again.'), 'flash/error');
            }
        }
        $roles = $this->Character->Role->find('list');
        $guilds = $this->Character->Guild->find('list');
        $users = $this->Character->User->find('list');
        $this->set(compact('roles', 'guilds', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Character->id = $id;
        if (!$this->Character->exists($id)) {
            throw new NotFoundException(__('Invalid character'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Character->save($this->request->data)) {
                $this->Session->setFlash(__('The character has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The character could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Character.' . $this->Character->primaryKey => $id));
            $this->request->data = $this->Character->find('first', $options);
        }
        $roles = $this->Character->Role->find('list');
        $guilds = $this->Character->Guild->find('list');
        $users = $this->Character->User->find('list');
        $this->set(compact('roles', 'guilds', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Character->id = $id;
        if (!$this->Character->exists()) {
            throw new NotFoundException(__('Invalid character'));
        }
        if ($this->Character->delete()) {
            $this->Session->setFlash(__('Character deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Character was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

    public function isAuthorized($user) {
        // The owner of a post can edit and delete it
        if (in_array($this->action, array('edit', 'delete'))) {
            $id = (int) $this->Character->id;

            if ($this->Character->isOwnedBy($id, $user['id'])) {
                return true;
            }
        } else if (in_array($this->action, array('add'))) {
            return true;
        }

        return parent::isAuthorized($user);
    }

}
