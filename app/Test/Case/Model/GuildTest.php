<?php
App::uses('Guild', 'Model');

/**
 * Guild Test Case
 */
class GuildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guild',
		'app.character',
		'app.role',
		'app.user',
		'app.inventory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guild = ClassRegistry::init('Guild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guild);

		parent::tearDown();
	}

}
