<?php

App::uses('AppModel', 'Model');

class Name extends AppModel {

    public function getNameNames($term = null) {
        if (!empty($term)) {
            $names = $this->find('list', array(
                'conditions' => array(
                    'name LIKE' => trim($term) . '%'
                )
            ));
            return $names;
        }
        return false;
    }

}
