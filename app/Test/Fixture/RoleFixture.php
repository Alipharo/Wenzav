<?php
/**
 * Role Fixture
 */
class RoleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tier' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'xp' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'subcategory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'name' => 'Barbare',
			'tier' => '1',
			'xp' => '0',
			'description' => 'Les barbares sont d\'excellents combattants. Mais tandis que l\'efficacité des guerriers provient de leur entraînement rigoureux, celle des barbares provient de la rage qui les anime. Quand la fureur du combat déferle en eux, ils deviennent brusquement plus forts et plus résistants aux attaques. Maintenir un tel état nécessite une incroyable dépense d\'énergie et les laisse épuisés, aussi doivent-ils vaincre rapidement, ce qui ne leur pose généralement pas de problèmes. A l\'aise dans les contrées sauvages, ils se déplacent très rapidement au pas de course.',
			'subcategory_id' => '19'
		),
		array(
			'id' => '2',
			'name' => 'Moine',
			'tier' => '2',
			'xp' => '150',
			'description' => 'Les moines considèrent chaque nouvelle aventure comme une mise à l\'épreuve. Bien qu\'ils ne soient pas du genre à se mettre en avant, ils n\'hésitent pas à utiliser leur talent pour le combat dès que quelqu\'un s\'oppose à eux. Les possessions matérielles ne les intéressent pas. Par contre, ils cherchent avidement tout ce qui leur permettra de perfectionner leur art.',
			'subcategory_id' => '0'
		),
		array(
			'id' => '3',
			'name' => 'Prêtre',
			'tier' => '1',
			'xp' => '0',
			'description' => 'Les prêtres sont les maîtres de la magie divine, particulièrement efficace pour guérir les maux de toute sorte. Même un prêtre débutant peut ramener un mourant à la vie, et beaucoup sont capables de faire revenir d\'entre les morts ceux qui ont fait le grand saut. L\'énergie divine que les prêtres canalisent leur permet d\'affecter les morts-vivants. Les prêtres bons peuvent les repousser, voire de les détruire, tandis que les prêtres malfaisants ont pour leur part le pouvoir de les intimider ou de les contrôler. Les prêtres bénéficient également d\'un certain entraînement au combat. Ils savent utiliser toutes les armes courantes et se sont formés à porter l\'armure, cette dernière n\'interférant pas avec la magie divine comme elle le fait avec la magie profane.',
			'subcategory_id' => '0'
		),
		array(
			'id' => '4',
			'name' => 'Paladin',
			'tier' => '2',
			'xp' => '200',
			'description' => 'Les paladins prennent leur tâche très au sérieux, mais préfèrent dire qu\'ils partent en "quête" plutôt qu\'à l\'aventure. Même une mission en apparence anodine est perçue comme une épreuve, une occasion de montrer son courage, d\'améliorer ses compétences martiales et de faire le bien. Mais c\'est lorsqu\'ils conduisent une campagne contre les forces du Mal que les paladins se sentent dans leur élément, pas quand ils pillent des ruines.',
			'subcategory_id' => '0'
		),
		array(
			'id' => '5',
			'name' => 'Barde',
			'tier' => '1',
			'xp' => '0',
			'description' => 'On dit souvent que la musique est magique, et le barde le prouve tous les jours. Se rendre d\'un pays à l\'autre pour découvrir de nouvelles légendes, conter des histoires et jouer de la musique pour vivre de la générosité de son public, telle est la vie du barde. Quand le hasard l\'entraîne dans un conflit, il fait souvent office de diplomate, négociateur, messagers, éclaireur ou espion.',
			'subcategory_id' => '0'
		),
	);

}
