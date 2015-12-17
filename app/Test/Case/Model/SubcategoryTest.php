<?php

App::uses('Subcategory', 'Model');

/**
 * Subcategory Test Case
 */
class SubcategoryTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.subcategory',
        'app.category',
        'app.role',
        'app.character',
        'app.guild',
        'app.user',
        'app.item',
        'app.characters_item'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->Subcategory = ClassRegistry::init('Subcategory');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Subcategory);

        parent::tearDown();
    }

    /**
     * testGetSubcategoriesByCategory method
     *
     * @return void
     */
    public function testGetSubcategoriesByCategoryTrue() {
        $result = $this->Subcategory->getSubcategoriesByCategory(6);
        
        $excepted = array(
            (int)10 => 'Knigth',
            (int)11 => 'Servant'
        );
        
        $this->assertEquals($excepted, $result);
    }
    
    /**
     * testGetSubcategoriesByCategory method
     *
     * @return void
     */
    public function testGetSubcategoriesByCategoryVide() {
        $result = $this->Subcategory->getSubcategoriesByCategory(42);
        
        $this->assertEmpty($result);
    }
}
