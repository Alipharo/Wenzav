<?php
App::uses('AppController', 'Controller');
/**
 * CharactersItems Controller
 *
 * @property CharactersItem $CharactersItem
 * @property PaginatorComponent $Paginator
 */
class CharactersItemsController extends AppController {

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
            if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") 
            {
                $this->CharactersItem->recursive = 0;
                $this->set('charactersItems', $this->paginate());
            }
            else 
            {
                $this->Session->setFlash(__('You are not a admin. You can\'t do that.'), 'flash/error');
                $this->redirect(array('controller' => 'characters', 'action' => 'index'));
            }
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
            if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") 
            {
                if (!$this->CharactersItem->exists($id)) {
			throw new NotFoundException(__('Invalid characters item'));
		}
		$options = array('conditions' => array('CharactersItem.' . $this->CharactersItem->primaryKey => $id));
		$this->set('charactersItem', $this->CharactersItem->find('first', $options));            }
            else 
            {
                $this->Session->setFlash(__('You are not a admin. You can\'t do that.'), 'flash/error');
                $this->redirect(array('controller' => 'characters', 'action' => 'index'));
            }
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") 
            {
                if ($this->request->is('post')) 
                {
			$this->CharactersItem->create();
			if ($this->CharactersItem->save($this->request->data)) 
                        {
				$this->Session->setFlash(__('The characters item has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} 
                        else 
                        {
				$this->Session->setFlash(__('The characters item could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$characters = $this->CharactersItem->Character->find('list');
		$items = $this->CharactersItem->Item->find('list');
		$this->set(compact('characters', 'items'));
            }
            else 
            {
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
            if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") 
            {
                $this->CharactersItem->id = $id;
		if (!$this->CharactersItem->exists($id)) 
                {
			throw new NotFoundException(__('Invalid characters item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) 
                {
			if ($this->CharactersItem->save($this->request->data)) 
                        {
				$this->Session->setFlash(__('The characters item has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} 
                        else 
                        {
				$this->Session->setFlash(__('The characters item could not be saved. Please, try again.'), 'flash/error');
			}
		}
                else 
                {
			$options = array('conditions' => array('CharactersItem.' . $this->CharactersItem->primaryKey => $id));
			$this->request->data = $this->CharactersItem->find('first', $options);
		}
		$characters = $this->CharactersItem->Character->find('list');
		$items = $this->CharactersItem->Item->find('list');
		$this->set(compact('characters', 'items'));            
            }
            else 
            {
                $this->Session->setFlash(__('You are not a admin. You can\'t do that.'), 'flash/error');
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
            if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") 
            {
                if (!$this->request->is('post')) 
                {
			throw new MethodNotAllowedException();
		}
		
                $this->CharactersItem->id = $id;
                
		if (!$this->CharactersItem->exists()) 
                {
			throw new NotFoundException(__('Invalid characters item'));
		}
                
		if ($this->CharactersItem->delete()) 
                {
			$this->Session->setFlash(__('Characters item deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
                
		$this->Session->setFlash(__('Characters item was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
            }
            else 
            {
                $this->Session->setFlash(__('You are not a admin. You can\'t do that.'), 'flash/error');
                $this->redirect(array('controller' => 'characters', 'action' => 'index'));
            }
	}
}
