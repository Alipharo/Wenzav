<?php
App::uses('Name', 'Model');

/**
 * Name Test Case
 */
class NameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.name'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Name = ClassRegistry::init('Name');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Name);

		parent::tearDown();
	}

/**
 * testGetNameNames method
 *
 * @return void
 */
	public function testGetNameNamesUnExist() {
		$testNames = $this->Name->getNameNames("P");
                $this->assertEqual($testNames, array("3" => "PewDiePie"));
	}
        
/**
 * testGetNameNames method
 *
 * @return void
 */
	public function testGetNameNamesUnNonExist() {
		$testNames = $this->Name->getNameNames("E");
                $this->assertEqual($testNames, array());
	}
        
/**
 * testGetNameNames method
 *
 * @return void
 */
	public function testGetNameNamesDeuxExist() {
		$testNames = $this->Name->getNameNames("Pe");
                $this->assertEqual($testNames, array("3" => "PewDiePie"));
	}
        
/**
 * testGetNameNames method
 *
 * @return void
 */
	public function testGetNameNamesNull() {
		$testNames = $this->Name->getNameNames();
                $this->assertFalse($testNames);
	}
        
        

}
