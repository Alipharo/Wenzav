<?php

App::uses('Item', 'Model');

/**
 * Item Test Case
 */
class ItemTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.item',
        'app.character',
        'app.role',
        'app.subcategory',
        'app.category',
        'app.guild',
        'app.user',
        'app.characters_item'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->Item = ClassRegistry::init('Item');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Item);

        parent::tearDown();
    }

    /**
     * testProcessUpload method
     *
     * @return void
     */
    public function testProcessImageUploadCorrect() {

        // Create a stub for the Contact Model class
        $stub = $this->getMockForModel('Item', array('is_uploaded_file', 'move_uploaded_file'));

        // Always return TRUE for the 'is_uploaded_file' function
        $stub->expects($this->any())->method('is_uploaded_file')->will($this->returnValue(TRUE));
        // Copy the file instead of 'move_uploaded_file' to allow testing
        $stub->expects($this->any())->method('move_uploaded_file')->will($this->returnCallback('copy'));

        $data = array(
            'Item' => array(
                'name' => 'Maison',
                'tier' => '1',
                'price' => '1',
                'description' => 'Home sweet home.',
                'filename' => array(
                    'name' => 'test.jpg',
                    'type' => 'image/jpeg',
                    'tmp_name' => ROOT . DS . APP_DIR . DS . 'Test' . DS . 'Case' . DS . 'Model' . DS . 'test.jpg',
                    'error' => 0,
                    'size' => '845941'
                ),
            )
        );


        // Attempt to save
        //$result = $stub->save($data);
        // Test successful insert
        //$this->assertArrayHasKey('Item', $result);
        // Get the count in the DB
        $result = $this->Item->find('count', array(
            'conditions' => array(
                'Item.tier' => '1',
                'Item.price' => '1',
                'Item.filename' => 'uploads/test.jpg'
            ),
        ));

        // Test DB entry
        $this->assertEqual($result, 0);

        // Test uploaded file exists
        $this->assertFileExists(WWW_ROOT . 'img' . DS . 'test.jpg');
    }
    
    /**
     * testProcessUpload method
     *
     * @return void
     */
    public function testProcessImageUploadMauvais() {

        // Create a stub for the Contact Model class
        $stub = $this->getMockForModel('Item', array('is_uploaded_file', 'move_uploaded_file'));

        // Always return TRUE for the 'is_uploaded_file' function
        $stub->expects($this->any())->method('is_uploaded_file')->will($this->returnValue(TRUE));
        // Copy the file instead of 'move_uploaded_file' to allow testing
        $stub->expects($this->any())->method('move_uploaded_file')->will($this->returnCallback('copy'));

        $data = array(
            'Item' => array(
                'name' => 'Caca',
                'tier' => '42',
                'price' => '42',
                'description' => 'Poop',
                'filename' => array(
                    'name' => 'Caca',
                    'type' => 'Poop',
                    'tmp_name' => ROOT . DS . APP_DIR . DS . 'Test' . DS . 'Case' . DS . 'Model' . DS . 'test.jpg',
                    'error' => 0,
                    'size' => 'Caca'
                ),
            )
        );


        // Attempt to save
        //$result = $stub->save($data);
        // Test successful insert
        //$this->assertArrayHasKey('Item', $result);
        
        // Get the count in the DB
        $result = $this->Item->find('count', array(
            'conditions' => array(
                'Item.tier' => '1',
                'Item.price' => '1',
                'Item.filename' => 'uploads/test.jpg'
            ),
        ));

        // Test DB entry
        $this->assertEqual($result, 0);

        // Test uploaded file exists
        $this->assertFileExists(WWW_ROOT . 'img' . DS . 'test.jpg');
    }

    /**
     * testProcessUpload method
     *
     * @return void
     */
    public function testProcessImageUploadNull() {

        // Create a stub for the Contact Model class
        $stub = $this->getMockForModel('Item', array('is_uploaded_file', 'move_uploaded_file'));

        // Always return TRUE for the 'is_uploaded_file' function
        $stub->expects($this->any())->method('is_uploaded_file')->will($this->returnValue(TRUE));
        
        // Copy the file instead of 'move_uploaded_file' to allow testing
        $stub->expects($this->any())->method('move_uploaded_file')->will($this->returnCallback('copy'));

        $data = array(
            'Item' => array(
                'name' => '',
                'tier' => '',
                'price' => '',
                'description' => '',
                'filename' => array(
                    'name' => '',
                    'type' => '',
                    'tmp_name' => ROOT . DS . APP_DIR . DS . 'Test' . DS . 'Case' . DS . 'Model' . DS . 'test.jpg',
                    'error' => 0,
                    'size' => ''
                ),
            )
        );


        // Attempt to save
        //$result = $stub->save($data);
        // Test successful insert
        //$this->assertArrayHasKey('Item', $result);
      
        // Get the count in the DB
        $result = $this->Item->find('count', array(
            'conditions' => array(
                'Item.tier' => '1',
                'Item.price' => '1',
                'Item.filename' => 'uploads/test.jpg'
            ),
        ));

        // Test DB entry
        $this->assertEqual($result, 0);

        // Test uploaded file exists
        $this->assertFileExists(WWW_ROOT . 'img' . DS . 'test.jpg');
    }
    
/**
 * testGetCharacterNames method
 *
 * @return void
 */
	public function testGetItemTrue() {
            $data = array(
                'Item' => array(
                    'name' => 'VolvaMaria',
                    'tier' => '69',
                    'price' => '69',
                    'description' => 'MAMAMIA',
                )
            );
            
            $result = $this->Item->save($data);

            $this->assertEqual($result['Item']['name'], $data['Item']['name']);
            $this->assertEqual($result['Item']['tier'], $data['Item']['tier']);
            $this->assertEqual($result['Item']['price'], $data['Item']['price']);
            $this->assertEqual($result['Item']['description'], $data['Item']['description']);
	}
      
            
/**
 * testGetCharacterNames method
 *
 * @return void
 */
	public function testGetItemFalse() {
            $data = array(
                'Item' => array(
                    'name' => 'Mama',
                    'tier' => 'Flash',
                    'price' => 'Arrow',
                    'description' => '2341234124324',
                )
            );
            
            $result = $this->Item->save($data);

            $this->assertFalse($result);
	}
}
