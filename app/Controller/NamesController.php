<?php

App::uses('AppController', 'Controller');

class NamesController extends AppController {

    public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');

    public function index() {
        if ($this->request->is('ajax')) {
            $term = $this->request->query('term');
            $nameNames = $this->Name->getNameNames($term);
            $this->set(compact('nameNames'));
            $this->set('_serialize', 'nameNames');
        }
    }

}
