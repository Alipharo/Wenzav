<?php

App::uses('AppController', 'Controller');

class SubcategoriesController extends AppController {

    public function getByCategory($category_id = null) {
        if($category_id == null){
            $category_id = $this->request->data['Subcategory']['category_id'];
        }
            
//        $category_id = $this->request->data['Subcategory']['category_id'];
//
//        $subcategories = $this->Subcategory->find('list', array(
//            'conditions' => array('Subcategory.category_id' => $category_id),
//            'recursive' => -1
//        ));

        $subcategories = $this->Subcategory->getSubcategoriesByCategory($category_id);
        $this->set('subcategories', $subcategories);
        $this->layout = 'ajax';
    }
}
