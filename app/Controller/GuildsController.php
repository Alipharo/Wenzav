<?php

App::uses('AppController', 'Controller');

/**
 * Guilds Controller
 *
 * @property Guild $Guild
 * @property PaginatorComponent $Paginator
 */
class GuildsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Guild->recursive = 0;
        $this->set('guilds', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Guild->exists($id)) {
            throw new NotFoundException(__('Invalid guild'));
        }
        $options = array('conditions' => array('Guild.' . $this->Guild->primaryKey => $id));
        $this->set('guild', $this->Guild->find('first', $options));
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
            $this->Guild->create();
            if ($this->Guild->save($this->request->data)) {
                $this->Session->setFlash(__('The guild has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The guild could not be saved. Please, try again.'), 'flash/error');
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Guild->id = $id;
        if (!$this->Guild->exists($id)) {
            throw new NotFoundException(__('Invalid guild'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Guild->save($this->request->data)) {
                $this->Session->setFlash(__('The guild has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The guild could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Guild.' . $this->Guild->primaryKey => $id));
            $this->request->data = $this->Guild->find('first', $options);
        }
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
        $this->Guild->id = $id;
        if (!$this->Guild->exists()) {
            throw new NotFoundException(__('Invalid guild'));
        }
        if ($this->Guild->delete()) {
            $this->Session->setFlash(__('Guild deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Guild was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

}
