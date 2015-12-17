CREATE TABLE `categories` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT
);

INSERT INTO `categories` (`id`, `name`) VALUES
(6, 'Holy'),
(7, 'Fire'),
(8, 'Frost'),
(9, 'Arcane'),
(10, 'War');

CREATE TABLE `characters` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `role_id` INTEGER,
  `life` INTEGER,
  `damage` INTEGER,
  `level` INTEGER,
  `xp` INTEGER,
  `guild_id` INTEGER,
  `description` TEXT,
  `user_id` INTEGER
);


INSERT INTO `characters` (`id`, `name`, `role_id`, `life`, `damage`, `level`, `xp`, `guild_id`, `description`, `user_id`) VALUES
(1, 'EmperorNiger', 5, 50, 5, 2, 135, 4, 'The Niger rule them all.', 14),
(2, 'John Snow', 4, 767, 256, 57, 37849, 4, 'I know nothing.', 16),
(3, 'Norbert', 1, 120, 100, 4, 768, 2, 'Norbert the dog & destroyer', 15),
(4, 'Johny', 1, 1000, 10, 3, 204, 1, 'Le barbare Johny kill everything!', 14),
(5, 'Alipharo', 4, 1000, 200, 34, 243124231, 4, 'Bonjour', 4);


CREATE TABLE `characters_items` (
  `id` INTEGER PRIMARY KEY ASC,
  `character_id` INTEGER,
  `item_id` INTEGER
);

INSERT INTO `characters_items` (`id`, `character_id`, `item_id`) VALUES
(2, 1, 1),
(3, 1, 1),
(4, 2, 2),
(5, 3, 3),
(6, 1, 4);

CREATE TABLE `guilds` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `description` TEXT
);

INSERT INTO `guilds` (`id`, `name`, `description`) VALUES
(1, 'Zhentarim', 'The Zhentarim seeks to become omnipresent and inescapable, more wealthy and powerful, and most importantly, untouchable. The public face of the organization appears much more benign, offering the best mercenaries money can buy. When a merchant needs an escort for his caravan, when a noble needs bodyguards to protect her holdings, or when a city needs trained soldiers to defend its honor, the Zhentarim provides the best-trained fighting men and women money can buy. However, the cost of doing business with the Black Network can be high.'),
(2, 'Harpers', 'The Harpers is an old organization that has risen, been shattered, and risen again several times. Its longevity and resilience are largely due to its decentralized, grassroots, secretive nature, and the near-autonomy of many of its members. The Harpers have “cells” and lone operatives throughout Faerûn, although they INTEGEReract and share information with one another from time to time as needs warrant. The Harpers'' ideology is noble, and its members pride themselves on their INTEGERegrity and incorruptibility. Harpers do not seek power or glory, only fair and equal treatment for all.'),
(3, 'The Emerald Enclave', 'The Emerald Enclave is a far-ranging group that opposes threats to the natural world and helps others survive the many perils of the wild. A ranger might be hired to lead a caravan through a treacherous mountain pass or the frozen tundra of Icewind Dale. A druid might volunteer to help a small village prepare for a long, brutal wINTEGERer. Barbarians and witches who live like hermits most of the year might defend a town against marauding orcs or barbarians. Members of the Emerald Enclave know how to survive, and more importantly, they want to help others do the same. They are not opposed to civilization or progress, but they strive to prevent civilization and the wilderness from destroying one another.'),
(4, 'Lords’ Alliance', 'The Lords’ Alliance is a coalition of rulers from cities and towns across Faerûn (primarily in the North), who collectively agree that some solidarity is needed to keep evil at bay. The rulers of Waterdeep, Silverymoon, NeverwINTEGERer, and other free cities in the region dominate the Alliance, and every lord in the Alliance works for the fate and fortune of his or her own settlement above all others. The agents of the Alliance include sophisticated bards, zealous paladins, talented mages, and grizzled warriors. They are chosen primarily for their loyalty, and are trained in observation, stealth, innuendo, and combat. Backed by the wealthy and the privileged, they carry quality equipment (often disguised to appear common), and spellcasters tend to have a large number of scrolls with communication spells.');

CREATE TABLE `items` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `tier` INTEGER,
  `price` INTEGER,
  `description` TEXT,
  `filename` TEXT
);

INSERT INTO `items` (`id`, `name`, `tier`, `price`, `description`, `filename`) VALUES
(1, 'Dague en adamantium', 5, 10000, 'La lame de cette dague non magique est faite d’adamantium. En tant qu’arme de maître, elle confère un bonus d’altération de +1 aux jets d’attaque.', 'items/128px_Ravening_Wings_Stifling_Dagger_icon.png'),
(2, 'Epée ardente', 3, 789, 'Cette arme est une épée longue +1 de feu INTEGERense. Une fois par jour, elle peut émettre un rayon brûlant vers une cible se trouvant à 9 mètres ou moins. Si le porteur réussit un jet d’attaque de contact à distance contre la cible, celle-ci subit 4d6 poINTEGERs de dégâts de feu.', 'items/Twin_Blades_Assassin_Jinada.png'),
(3, 'Habit de paysan', 1, 10, 'Chemise ample et haut-de-chausse à l’avenant, ce dernier étant remplacé par une jupe pour les femmes. Les pieds sont protégés par plusieurs épaisseurs de tissu enroulé.', ''),
(4, 'Aimant', 2, 156, 'Cette barre de métal est aimanté et peut donc attiré les métaux ferreux, tel que le fer ou l''acier. l''aimant peut soulever jusqu''à 1 kg de matière ferreuse si elle entre au contact avec l''objet en question. Il peut aussi attirer des objets métalliques de 150 g ou moins jusqu''à une distance de 30 centimètres.', '');

CREATE TABLE `names` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `created` TEXT,
  `modified` TEXT
);

INSERT INTO `names` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Alipharo', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(2, 'Acura', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(3, 'PewDiePie', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(4, 'Shartuku', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(5, 'Lortel', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(6, 'F0rtitude', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(7, 'Andy', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(8, 'Dave', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(9, 'Hommer', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(10, 'Chrysler', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(11, 'John', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(12, 'Ferrari', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(13, 'Braum', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(14, 'Vayne', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(15, 'Jax', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(16, 'Lux', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(17, 'Infiniti', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(18, 'Jaguar', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(19, 'Arthas', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(20, 'Morgana', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(21, 'Darius', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(22, 'Felix', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(23, 'Malik', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(24, 'Xaras', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(25, 'Mojo', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(26, 'Diablo', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(27, 'Tesla', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(28, 'Altharina', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(29, 'Batman', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(30, 'Gerald', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(31, 'Flash', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(32, 'Daisie', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(33, 'Inoue', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(34, 'Tezor', '2015-11-10 10:13:49', '2015-11-10 10:13:49'),
(35, 'Galabyca', '2015-11-10 10:13:49', '2015-11-10 10:13:49');

CREATE TABLE `roles` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `tier` INTEGER,
  `xp` INTEGER,
  `description` TEXT,
  `subcategory_id` INTEGER
);

INSERT INTO `roles` (`id`, `name`, `tier`, `xp`, `description`, `subcategory_id`) VALUES
(1, 'Barbare', 1, 0, 'Les barbares sont d''excellents combattants. Mais tandis que l''efficacité des guerriers provient de leur entraînement rigoureux, celle des barbares provient de la rage qui les anime. Quand la fureur du combat déferle en eux, ils deviennent brusquement plus forts et plus résistants aux attaques. MaINTEGERenir un tel état nécessite une incroyable dépense d''énergie et les laisse épuisés, aussi doivent-ils vaincre rapidement, ce qui ne leur pose généralement pas de problèmes. A l''aise dans les contrées sauvages, ils se déplacent très rapidement au pas de course.', 19),
(2, 'Moine', 2, 150, 'Les moines considèrent chaque nouvelle aventure comme une mise à l''épreuve. Bien qu''ils ne soient pas du genre à se mettre en avant, ils n''hésitent pas à utiliser leur talent pour le combat dès que quelqu''un s''oppose à eux. Les possessions matérielles ne les INTEGERéressent pas. Par contre, ils cherchent avidement tout ce qui leur permettra de perfectionner leur art.', 0),
(3, 'Prêtre', 1, 0, 'Les prêtres sont les maîtres de la magie divine, particulièrement efficace pour guérir les maux de toute sorte. Même un prêtre débutant peut ramener un mourant à la vie, et beaucoup sont capables de faire revenir d''entre les morts ceux qui ont fait le grand saut. L''énergie divine que les prêtres canalisent leur permet d''affecter les morts-vivants. Les prêtres bons peuvent les repousser, voire de les détruire, tandis que les prêtres malfaisants ont pour leur part le pouvoir de les INTEGERimider ou de les contrôler. Les prêtres bénéficient également d''un certain entraînement au combat. Ils savent utiliser toutes les armes courantes et se sont formés à porter l''armure, cette dernière n''INTEGERerférant pas avec la magie divine comme elle le fait avec la magie profane.', 0),
(4, 'Paladin', 2, 200, 'Les paladins prennent leur tâche très au sérieux, mais préfèrent dire qu''ils partent en "quête" plutôt qu''à l''aventure. Même une mission en apparence anodine est perçue comme une épreuve, une occasion de montrer son courage, d''améliorer ses compétences martiales et de faire le bien. Mais c''est lorsqu''ils conduisent une campagne contre les forces du Mal que les paladins se sentent dans leur élément, pas quand ils pillent des ruines.', 0),
(5, 'Barde', 1, 0, 'On dit souvent que la musique est magique, et le barde le prouve tous les jours. Se rendre d''un pays à l''autre pour découvrir de nouvelles légendes, conter des histoires et jouer de la musique pour vivre de la générosité de son public, telle est la vie du barde. Quand le hasard l''entraîne dans un conflit, il fait souvent office de diplomate, négociateur, messagers, éclaireur ou espion.', 0);

CREATE TABLE `subcategories` (
  `id` INTEGER PRIMARY KEY ASC,
  `category_id` INTEGER,
  `name` TEXT
);

INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(10, 6, 'Knigth'),
(11, 6, 'Servant'),
(12, 7, 'Destruction'),
(13, 7, 'Creation'),
(14, 8, 'Ice'),
(15, 8, 'Cold'),
(16, 9, 'Enchantment'),
(17, 9, 'Transmutation'),
(18, 9, 'Conjuration'),
(19, 10, 'Warrior');

CREATE TABLE `users` (
  `id` INTEGER PRIMARY KEY ASC,
  `username` TEXT,
  `password` TEXT,
  `email` TEXT,
  `gold` INTEGER,
  `role` TEXT,
  `active` INTEGER
);

INSERT INTO `users` (`id`, `username`, `password`, `email`, `gold`, `role`, `active`) VALUES
(4, 'Bob', '$2a$10$zuzIxh/2iQpSW6Rcw1p6yunt8NtcZ19tqpLXuUGC9Pxb9hTs23NXq', 'Bob@hotmail.com', 234, 'Admin', 1),
(14, 'Felix', '$2a$10$zuzIxh/2iQpSW6Rcw1p6yunt8NtcZ19tqpLXuUGC9Pxb9hTs23NXq', 'Fwilhelmy@hotmail.com', 234, 'Admin', 1),
(15, 'Nawat', '$2a$10$5n7TOr3wxInvnzXhlDknKekdzeamlXjQax3qYKz3z3QvK2Qq6E6ay', 'nawat@patate.ninja', 0, 'Member', 1),
(16, 'FixIt', '$2a$10$RNLW.dB1JNrUqNidutaFDuNwOuXedLr4k5q7bZEAaiCJ8jpV4/t6G', 'FixIt@momo.qc', 0, 'Member', 1),
(38, 'Mama', '$2a$10$Lb1qbqOdiCtFZMzEqhU4Jun0C2Rhxayo2yNAZIOJOCIYAq2xkTEMi', 'wenzavGames@gmail.com', 0, 'Member', 0);