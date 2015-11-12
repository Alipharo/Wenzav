<?php

App::uses('AppModel', 'Model');

/**
 * Item Model
 *
 * @property Character $Character
 */
class Item extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'tier' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'price' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'description' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'filename' => array(
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
            'uploadError' => array(
                'rule' => 'uploadError',
                'message' => 'Something went wrong with the file upload',
                'required' => FALSE,
                'allowEmpty' => TRUE,
            ),
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
            'mimeType' => array(
                'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
                'message' => 'Invalid file, only images allowed',
                'required' => FALSE,
                'allowEmpty' => TRUE,
            ),
            // custom callback to deal with the file upload
            'processUpload' => array(
                'rule' => 'processUpload',
                'message' => 'Something went wrong processing your file',
                'required' => FALSE,
                'allowEmpty' => TRUE,
                'last' => TRUE,
            )
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Character' => array(
            'className' => 'Character',
            'joinTable' => 'characters_items',
            'foreignKey' => 'item_id',
            'associationForeignKey' => 'character_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );

    public function isOwnedBy($id, $user) {
        return $this->field('id', array('id' => $id, 'user_id' => $user)) !== false;
    }

    /**
     * Before Validation
     * @param array $options
     * @return boolean
     */
    public function beforeValidate($options = array()) {
        // ignore empty file - causes issues with form validation when file is empty and optional
        if (!empty($this->data[$this->alias]['filename']['error']) && $this->data[$this->alias]['filename']['error'] == 4 && $this->data[$this->alias]['filename']['size'] == 0) {
            unset($this->data[$this->alias]['filename']);
        }

        return parent::beforeValidate($options);
    }

    /**
     * Before Save Callback
     * @param array $options
     * @return boolean
     */
    public function beforeSave($options = array()) {
        // a file has been uploaded so grab the filepath
        if (!empty($this->data[$this->alias]['filepath'])) {
            $this->data[$this->alias]['filename'] = $this->data[$this->alias]['filepath'];
        }

        return parent::beforeSave($options);
    }

    /**
     * Process the Upload
     * @param array $check
     * @return boolean
     */
    public function processUpload($check = array()) {
        // deal with uploaded file
        if (!empty($check['filename']['tmp_name'])) {

            // check file is uploaded
            if (!is_uploaded_file($check['filename']['tmp_name'])) {
                return FALSE;
            }

            // build full filename
            $filename = 'items' . DS . Inflector::slug(pathinfo($check['filename']['name'], PATHINFO_FILENAME)) . '.' . pathinfo($check['filename']['name'], PATHINFO_EXTENSION);

            // @todo check for duplicate filename
          
            // try moving file
            if (move_uploaded_file($check['filename']['tmp_name'], IMAGES . $filename)) {
                // save the file path relative from WWW_ROOT to IMAGES/items
                $this->data[$this->alias]['filepath'] = str_replace(DS, "/", str_replace(WWW_ROOT, "", $filename));
            } else {
                return FALSE;
            }
        }
        
        return TRUE;
    }
}