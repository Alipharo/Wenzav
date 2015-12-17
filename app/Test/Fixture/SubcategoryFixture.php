<?php
/**
 * Subcategory Fixture
 */
class SubcategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '10',
			'category_id' => '6',
			'name' => 'Knigth'
		),
		array(
			'id' => '11',
			'category_id' => '6',
			'name' => 'Servant'
		),
		array(
			'id' => '12',
			'category_id' => '7',
			'name' => 'Destruction'
		),
		array(
			'id' => '13',
			'category_id' => '7',
			'name' => 'Creation'
		),
		array(
			'id' => '14',
			'category_id' => '8',
			'name' => 'Ice'
		),
		array(
			'id' => '15',
			'category_id' => '8',
			'name' => 'Cold'
		),
		array(
			'id' => '16',
			'category_id' => '9',
			'name' => 'Enchantment'
		),
		array(
			'id' => '17',
			'category_id' => '9',
			'name' => 'Transmutation'
		),
		array(
			'id' => '18',
			'category_id' => '9',
			'name' => 'Conjuration'
		),
		array(
			'id' => '19',
			'category_id' => '10',
			'name' => 'Warrior'
		),
	);

}
