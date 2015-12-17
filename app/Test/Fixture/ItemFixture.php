<?php
/**
 * Item Fixture
 */
class ItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tier' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'filename' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Dague en adamantium',
			'tier' => '5',
			'price' => '10000',
			'description' => 'La lame de cette dague non magique est faite d’adamantium. En tant qu’arme de maître, elle confère un bonus d’altération de +1 aux jets d’attaque.',
			'filename' => 'items/128px_Ravening_Wings_Stifling_Dagger_icon.png'
		),
		array(
			'id' => '2',
			'name' => 'Epée ardente',
			'tier' => '3',
			'price' => '789',
			'description' => 'Cette arme est une épée longue +1 de feu intense. Une fois par jour, elle peut émettre un rayon brûlant vers une cible se trouvant à 9 mètres ou moins. Si le porteur réussit un jet d’attaque de contact à distance contre la cible, celle-ci subit 4d6 points de dégâts de feu.',
			'filename' => 'items/Twin_Blades_Assassin_Jinada.png'
		),
		array(
			'id' => '3',
			'name' => 'Habit de paysan',
			'tier' => '1',
			'price' => '10',
			'description' => 'Chemise ample et haut-de-chausse à l’avenant, ce dernier étant remplacé par une jupe pour les femmes. Les pieds sont protégés par plusieurs épaisseurs de tissu enroulé.',
			'filename' => ''
		),
		array(
			'id' => '4',
			'name' => 'Aimant',
			'tier' => '2',
			'price' => '156',
			'description' => 'Cette barre de métal est aimanté et peut donc attiré les métaux ferreux, tel que le fer ou l\'acier. l\'aimant peut soulever jusqu\'à 1 kg de matière ferreuse si elle entre au contact avec l\'objet en question. Il peut aussi attirer des objets métalliques de 150 g ou moins jusqu\'à une distance de 30 centimètres.',
			'filename' => ''
		),
	);

}
