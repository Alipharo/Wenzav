<?php
/**
 * Guild Fixture
 */
class GuildFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Zhentarim',
			'description' => 'The Zhentarim seeks to become omnipresent and inescapable, more wealthy and powerful, and most importantly, untouchable. The public face of the organization appears much more benign, offering the best mercenaries money can buy. When a merchant needs an escort for his caravan, when a noble needs bodyguards to protect her holdings, or when a city needs trained soldiers to defend its honor, the Zhentarim provides the best-trained fighting men and women money can buy. However, the cost of doing business with the Black Network can be high.'
		),
		array(
			'id' => '2',
			'name' => 'Harpers',
			'description' => 'The Harpers is an old organization that has risen, been shattered, and risen again several times. Its longevity and resilience are largely due to its decentralized, grassroots, secretive nature, and the near-autonomy of many of its members. The Harpers have “cells” and lone operatives throughout Faerûn, although they interact and share information with one another from time to time as needs warrant. The Harpers\' ideology is noble, and its members pride themselves on their integrity and incorruptibility. Harpers do not seek power or glory, only fair and equal treatment for all.'
		),
		array(
			'id' => '3',
			'name' => 'The Emerald Enclave',
			'description' => 'The Emerald Enclave is a far-ranging group that opposes threats to the natural world and helps others survive the many perils of the wild. A ranger might be hired to lead a caravan through a treacherous mountain pass or the frozen tundra of Icewind Dale. A druid might volunteer to help a small village prepare for a long, brutal winter. Barbarians and witches who live like hermits most of the year might defend a town against marauding orcs or barbarians. Members of the Emerald Enclave know how to survive, and more importantly, they want to help others do the same. They are not opposed to civilization or progress, but they strive to prevent civilization and the wilderness from destroying one another.'
		),
		array(
			'id' => '4',
			'name' => 'Lords’ Alliance',
			'description' => 'The Lords’ Alliance is a coalition of rulers from cities and towns across Faerûn (primarily in the North), who collectively agree that some solidarity is needed to keep evil at bay. The rulers of Waterdeep, Silverymoon, Neverwinter, and other free cities in the region dominate the Alliance, and every lord in the Alliance works for the fate and fortune of his or her own settlement above all others. The agents of the Alliance include sophisticated bards, zealous paladins, talented mages, and grizzled warriors. They are chosen primarily for their loyalty, and are trained in observation, stealth, innuendo, and combat. Backed by the wealthy and the privileged, they carry quality equipment (often disguised to appear common), and spellcasters tend to have a large number of scrolls with communication spells.'
		),
	);

}
