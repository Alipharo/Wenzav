<?php
App::uses('Character', 'Model');

/**
 * Character Test Case
 */
class CharacterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.character',
		'app.role',
		'app.subcategory',
		'app.category',
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
		$this->Character = ClassRegistry::init('Character');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Character);

		parent::tearDown();
	}

/**
 * testIsOwnedByTrue method
 *
 * @return void
 */
	public function testIsOwnedByTrue() {
            $testIsOwnedBy = $this->Character->isOwnedBy(1,14);
            $this->assertTrue($testIsOwnedBy);
	}
        
/**
 * testIsOwnedByFalse method
 *
 * @return void
 */
	public function testIsOwnedByFalse() {
            $testIsOwnedBy = $this->Character->isOwnedBy(42,42);
            $this->assertFalse($testIsOwnedBy);
	}
        
/**
 * testGetCharacterNames method
 *
 * @return void
 */
	public function testGetCharacterTrue() {
            $data = array(
                'Character' => array(
                    'name' => 'John',
                    'role_id' => '1',
                    'life' => '100',
                    'damage' => '10',
                    'level' => '3',
                    'xp' => '250',
                    'guild_id' => '1',
                    'description' => 'JOHN CEENAA!',
                    'user_id' => '1'
                )
            );
            
            $result = $this->Character->save($data);

            $this->assertEqual($result['Character']['name'], $result['Character']['name']);
            $this->assertEqual($result['Character']['role_id'], $result['Character']['role_id']);
            $this->assertEqual($result['Character']['life'], $result['Character']['life']);
            $this->assertEqual($result['Character']['damage'], $result['Character']['damage']);
            $this->assertEqual($result['Character']['level'], $result['Character']['level']);
            $this->assertEqual($result['Character']['xp'], $result['Character']['xp']);
            $this->assertEqual($result['Character']['guild_id'], $result['Character']['guild_id']);
            $this->assertEqual($result['Character']['description'], $result['Character']['description']);
            $this->assertEqual($result['Character']['user_id'], $result['Character']['user_id']);
	}
        
/**
 * testGetCharacterNames method
 *
 * @return void
 */
	public function testGetCharacterFalzinini() {
            $data = array(
                'Character' => array(
                    'name' => 'KidMLGNOSCOPEBITCHES',
                    'role_id' => 'noscopeIhackyosystem',
                    'life' => 'cantbebeatenIamtopowerfull',
                    'damage' => 'over9000',
                    'level' => 'hackyosystembitches',
                    'xp' => 'idontneedthiscauseIthebest',
                    'guild_id' => 'yoloswag',
                    'description' => 'tocoolforyoubro',
                    'user_id' => '69'
                )
            );
            
            $result = $this->Character->save($data);

            $this->assertFalse($result);
	}
}