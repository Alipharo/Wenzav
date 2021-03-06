<?php

App::uses('AppModel', 'Model');

/**
 * Subcategory Model
 *
 * @property Category $Category
 * @property Role $Role
 */
class Subcategory extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Role' => array(
            'className' => 'Role',
            'foreignKey' => 'subcategory_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    public function getSubcategoriesByCategory($category_id) {
        return $this->find('list', array(
            'conditions' => array('Subcategory.category_id' => $category_id),
            'recursive' => -1
        ));
    }

}
