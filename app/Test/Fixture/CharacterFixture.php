<?php
/**
 * Character Fixture
 */
class CharacterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'life' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'damage' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'level' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'xp' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'guild_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Name' => array('column' => 'name', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'EmperorNiger',
			'role_id' => '5',
			'life' => '50',
			'damage' => '5',
			'level' => '2',
			'xp' => '135',
			'guild_id' => '4',
			'description' => 'The Niger rule them all.',
			'user_id' => '14'
		),
		array(
			'id' => '2',
			'name' => 'John Snow',
			'role_id' => '4',
			'life' => '767',
			'damage' => '256',
			'level' => '57',
			'xp' => '37849',
			'guild_id' => '4',
			'description' => 'I know nothing.',
			'user_id' => '16'
		),
		array(
			'id' => '3',
			'name' => 'Norbert',
			'role_id' => '1',
			'life' => '120',
			'damage' => '100',
			'level' => '4',
			'xp' => '768',
			'guild_id' => '2',
			'description' => 'Norbert the dog & destroyer',
			'user_id' => '15'
		),
		array(
			'id' => '4',
			'name' => 'Johny',
			'role_id' => '1',
			'life' => '1000',
			'damage' => '10',
			'level' => '3',
			'xp' => '204',
			'guild_id' => '1',
			'description' => 'Le barbare Johny kill everything!',
			'user_id' => '14'
		),
		array(
			'id' => '5',
			'name' => 'Alipharo',
			'role_id' => '4',
			'life' => '1000',
			'damage' => '200',
			'level' => '34',
			'xp' => '243124231',
			'guild_id' => '4',
			'description' => 'Bonjour',
			'user_id' => '4'
		),
	);

}
