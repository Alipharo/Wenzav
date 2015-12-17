<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gold' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'role' => array('type' => 'string', 'null' => false, 'default' => 'Member', 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Username' => array('column' => 'username', 'unique' => 1),
			'Email' => array('column' => 'email', 'unique' => 1)
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
			'id' => '4',
			'username' => 'Bob',
			'password' => '$2a$10$zuzIxh/2iQpSW6Rcw1p6yunt8NtcZ19tqpLXuUGC9Pxb9hTs23NXq',
			'email' => 'Bob@hotmail.com',
			'gold' => '234',
			'role' => 'Admin',
			'active' => 1
		),
		array(
			'id' => '14',
			'username' => 'Felix',
			'password' => '$2a$10$zuzIxh/2iQpSW6Rcw1p6yunt8NtcZ19tqpLXuUGC9Pxb9hTs23NXq',
			'email' => 'Fwilhelmy@hotmail.com',
			'gold' => '234',
			'role' => 'Admin',
			'active' => 1
		),
		array(
			'id' => '15',
			'username' => 'Nawat',
			'password' => '$2a$10$5n7TOr3wxInvnzXhlDknKekdzeamlXjQax3qYKz3z3QvK2Qq6E6ay',
			'email' => 'nawat@patate.ninja',
			'gold' => '0',
			'role' => 'Member',
			'active' => 1
		),
		array(
			'id' => '16',
			'username' => 'FixIt',
			'password' => '$2a$10$RNLW.dB1JNrUqNidutaFDuNwOuXedLr4k5q7bZEAaiCJ8jpV4/t6G',
			'email' => 'FixIt@momo.qc',
			'gold' => '0',
			'role' => 'Member',
			'active' => 1
		),
		array(
			'id' => '38',
			'username' => 'Mama',
			'password' => '$2a$10$Lb1qbqOdiCtFZMzEqhU4Jun0C2Rhxayo2yNAZIOJOCIYAq2xkTEMi',
			'email' => 'wenzavGames@gmail.com',
			'gold' => '0',
			'role' => 'Member',
			'active' => 0
		),
	);

}
