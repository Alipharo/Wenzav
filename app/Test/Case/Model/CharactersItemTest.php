<?php
App::uses('CharactersItem', 'Model');

/**
 * CharactersItem Test Case
 */
class CharactersItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.characters_item',
		'app.character',
		'app.role',
		'app.guild',
		'app.user',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CharactersItem = ClassRegistry::init('CharactersItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CharactersItem);

		parent::tearDown();
	}

}
