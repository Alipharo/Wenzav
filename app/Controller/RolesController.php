<?php

App::uses('AppController', 'Controller');

/**
 * Roles Controller
 *
 * @property Role $Role
 * @property PaginatorComponent $Paginator
 */
class RolesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session');
    public $helpers = array('Js');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Role->recursive = 0;
        $this->set('roles', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Role->exists($id)) {
            throw new NotFoundException(__('Invalid role'));
        }
        $options = array('conditions' => array('Role.' . $this->Role->primaryKey => $id));
        $this->set('role', $this->Role->find('first', $options));
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
            $this->Role->create();
            if ($this->Role->save($this->request->data)) {
                $this->Session->setFlash(__('The role has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The role could not be saved. Please, try again.'), 'flash/error');
            }
        }

        // ligne générée par bake en raison de la relation "Post belongsTo Subcategory"
        // $subcategories = $this->Post->Subcategory->find('list');
        // remplacée par
        $categories = $this->Role->Subcategory->Category->find('list');
        $subcategories = array('Choisir categorie');
        $this->set(compact('categories', 'subcategories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Role->id = $id;
        if (!$this->Role->exists($id)) {
            throw new NotFoundException(__('Invalid role'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Role->save($this->request->data)) {
                $this->Session->setFlash(__('The role has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The role could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Role.' . $this->Role->primaryKey => $id));
            $this->request->data = $this->Role->find('first', $options);
        }

        // ligne générée par bake en raison de la relation "Post belongsTo Subcategory"
        // $subcategories = $this->Post->Subcategory->find('list');
        $categories = $this->Role->Subcategory->Category->find('list');

        $category_id = $this->request->data['Subcategory']['category_id'];

        $subcategories = $this->Role->Subcategory->find('list', array(
            'conditions' => array('Subcategory.category_id' => $category_id),
            'recursive' => -1
        ));

        $this->set('subcategories', $subcategories);


        $this->set(compact('categories', 'subcategories'));
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
        $this->Role->id = $id;
        if (!$this->Role->exists()) {
            throw new NotFoundException(__('Invalid role'));
        }
        if ($this->Role->delete()) {
            $this->Session->setFlash(__('Role deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Role was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

}
