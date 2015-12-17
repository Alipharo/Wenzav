<?php
/**
 * Name Fixture
 */
class NameFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Alipharo',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '2',
			'name' => 'Acura',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '3',
			'name' => 'PewDiePie',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '4',
			'name' => 'Shartuku',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '5',
			'name' => 'Lortel',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '6',
			'name' => 'F0rtitude',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '7',
			'name' => 'Andy',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '8',
			'name' => 'Dave',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '9',
			'name' => 'Hommer',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
		array(
			'id' => '10',
			'name' => 'Chrysler',
			'created' => '2015-11-10 10:13:49',
			'modified' => '2015-11-10 10:13:49'
		),
	);

}
