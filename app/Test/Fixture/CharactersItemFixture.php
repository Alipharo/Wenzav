<?php
/**
 * CharactersItem Fixture
 */
class CharactersItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'character_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => '2',
			'character_id' => '1',
			'item_id' => '1'
		),
		array(
			'id' => '3',
			'character_id' => '1',
			'item_id' => '1'
		),
		array(
			'id' => '4',
			'character_id' => '2',
			'item_id' => '2'
		),
		array(
			'id' => '5',
			'character_id' => '3',
			'item_id' => '3'
		),
		array(
			'id' => '6',
			'character_id' => '1',
			'item_id' => '4'
		),
	);

}
