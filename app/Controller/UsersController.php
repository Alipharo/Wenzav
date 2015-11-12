<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if ($this->Session->check('Auth.User') && ($this->Session->read('Auth.User.role') == "Admin" || $this->Session->read('Auth.User.id') == $id)) {
            if (!$this->User->exists($id)) {
                throw new NotFoundException(__('Invalid user'));
            }
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->set('user', $this->User->find('first', $options));
        } else {
            $this->Session->setFlash(__('You can\'t view the account of another user.'), 'flash/error');
            $this->redirect(array('controller' => 'users', 'action' => 'index'));
        }
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") {
            if ($this->request->is('post')) {
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                    $u = $this->User->read(null, $this->User->getInsertId());
                    $this->send_mail($u['User']['email'], $u['User']['username'], $this->User->getInsertID(), $u['User']['password']);

                    $this->Session->setFlash(__('The user has been saved'), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
                }
            }
        } else {
            $this->Session->setFlash(__('You are not a admin. You can\'t do that.'), 'flash/error');
            $this->redirect(array('controller' => 'characters', 'action' => 'index'));
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
        if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") {
            $this->User->id = $id;

            if (!$this->User->exists($id)) {
                throw new NotFoundException(__('Invalid user'));
            }

            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('The user has been saved'), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
                }
            } else {
                $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
                $this->request->data = $this->User->find('first', $options);
            }
        } else {
            $this->Session->setFlash(__('You can\'t edit the account of another user'), 'flash/error');
            $this->redirect(array('controller' => 'characters', 'action' => 'index'));
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
        if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") {
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
            $this->User->id = $id;

            if (!$this->User->exists()) {
                throw new NotFoundException(__('Invalid user'));
            }

            if ($this->User->delete()) {
                $this->Session->setFlash(__('User deleted'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            }

            $this->Session->setFlash(__('User was not deleted'), 'flash/error');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash(__('You can\'t delete the account of another user.'), 'flash/error');
            $this->redirect(array('controller' => 'characters', 'action' => 'index'));
        }
    }

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('register', 'logout', 'login');
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }

            $this->Session->setFlash(__('Invalid username or password, try again.'), 'flash/error');
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function register() {
        if ($this->request->is('post')) {
            $this->User->create();

            if ($this->User->save($this->request->data)) {
                $u = $this->User->read(null, $this->User->getInsertId());
                $this->send_mail($d['User']['email'], $d['User']['username'], $this->User->getInsertID(), false);

                $this->Session->setFlash(__('You have been successfully registered. You should now go activate your account'), 'flash/success');
                $this->redirect(array('controller' => 'characters', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('You could not register. Please, try again.'), 'flash/error');
            }
        }
    }

    public function send_mail($recipient = null, $username = null, $id = null, $password = null) {
        $link = array('controller' => 'users', 'action' => 'activate', $id . '-' . md5($password));
        App::uses('CakeEmail', 'Network/Email');
        $email = new CakeEmail('gmail');
        $email->from('noreply@wenzav.com')->to($recipient)->subject('Mail Confirmation');
        $email->emailFormat('html')->template('activation')->viewVars(array('username' => $username, 'link' => $link));
        $email->send();
    }

    public function activate($link) {
        if (empty($link)) {
            $this->redirect(array('action' => 'login'));
        }

        $linkArray = explode('-', $link);
        $user = $this->User->find('first', array('conditions' => array('id' => $linkArray[0], 'MD5(User.password)' => $linkArray[1], 'active' => 0)));

        if (!empty($user)) {
            $this->User->id = $user['User']['id'];
            $this->User->saveField('active', 1);
            $this->Session->setFlash(__('Account activated! You are now able to play the game!'), 'flash/success');
            $user = $this->User->findById($user['User']['id']);
            $this->Auth->login($user['User']);
            $this->redirect($this->Auth->logout());
        } else {
            $this->Session->setFlash(__('Activation link not good or account already activated.'), 'flash/error');
            $this->redirect('/');
        }
    }
}