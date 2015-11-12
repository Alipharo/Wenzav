-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Jeu 12 Novembre 2015 à 02:03
-- Version du serveur :  5.5.44
-- Version de PHP :  5.4.43

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wenzav`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(6, 'Holy'),
(7, 'Fire'),
(8, 'Frost'),
(9, 'Arcane'),
(10, 'War');

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `role_id` int(11) NOT NULL,
  `life` int(11) NOT NULL,
  `damage` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `guild_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `characters`
--

INSERT INTO `characters` (`id`, `name`, `role_id`, `life`, `damage`, `level`, `xp`, `guild_id`, `description`, `user_id`) VALUES
(1, 'EmperorNiger', 5, 50, 5, 2, 135, 4, 'The Niger rule them all.', 14),
(2, 'John Snow', 4, 767, 256, 57, 37849, 4, 'I know nothing.', 16),
(3, 'Norbert', 1, 120, 100, 4, 768, 2, 'Norbert the dog & destroyer', 15),
(4, 'Johny', 1, 1000, 10, 3, 204, 1, 'Le barbare Johny kill everything!', 14);

-- --------------------------------------------------------

--
-- Structure de la table `characters_items`
--

CREATE TABLE `characters_items` (
  `id` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `characters_items`
--

INSERT INTO `characters_items` (`id`, `character_id`, `item_id`) VALUES
(2, 1, 1),
(3, 1, 1),
(4, 2, 2),
(5, 3, 3),
(6, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `guilds`
--

CREATE TABLE `guilds` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `guilds`
--

INSERT INTO `guilds` (`id`, `name`, `description`) VALUES
(1, 'Zhentarim', 'The Zhentarim seeks to become omnipresent and inescapable, more wealthy and powerful, and most importantly, untouchable. The public face of the organization appears much more benign, offering the best mercenaries money can buy. When a merchant needs an escort for his caravan, when a noble needs bodyguards to protect her holdings, or when a city needs trained soldiers to defend its honor, the Zhentarim provides the best-trained fighting men and women money can buy. However, the cost of doing business with the Black Network can be high.'),
(2, 'Harpers', 'The Harpers is an old organization that has risen, been shattered, and risen again several times. Its longevity and resilience are largely due to its decentralized, grassroots, secretive nature, and the near-autonomy of many of its members. The Harpers have “cells” and lone operatives throughout Faerûn, although they interact and share information with one another from time to time as needs warrant. The Harpers'' ideology is noble, and its members pride themselves on their integrity and incorruptibility. Harpers do not seek power or glory, only fair and equal treatment for all.'),
(3, 'The Emerald Enclave', 'The Emerald Enclave is a far-ranging group that opposes threats to the natural world and helps others survive the many perils of the wild. A ranger might be hired to lead a caravan through a treacherous mountain pass or the frozen tundra of Icewind Dale. A druid might volunteer to help a small village prepare for a long, brutal winter. Barbarians and witches who live like hermits most of the year might defend a town against marauding orcs or barbarians. Members of the Emerald Enclave know how to survive, and more importantly, they want to help others do the same. They are not opposed to civilization or progress, but they strive to prevent civilization and the wilderness from destroying one another.'),
(4, 'Lords’ Alliance', 'The Lords’ Alliance is a coalition of rulers from cities and towns across Faerûn (primarily in the North), who collectively agree that some solidarity is needed to keep evil at bay. The rulers of Waterdeep, Silverymoon, Neverwinter, and other free cities in the region dominate the Alliance, and every lord in the Alliance works for the fate and fortune of his or her own settlement above all others. The agents of the Alliance include sophisticated bards, zealous paladins, talented mages, and grizzled warriors. They are chosen primarily for their loyalty, and are trained in observation, stealth, innuendo, and combat. Backed by the wealthy and the privileged, they carry quality equipment (often disguised to appear common), and spellcasters tend to have a large number of scrolls with communication spells.');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `tier` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `items`
--

INSERT INTO `items` (`id`, `name`, `tier`, `price`, `description`, `filename`) VALUES
(1, 'Dague en adamantium', 5, 10000, 'La lame de cette dague non magique est faite d’adamantium. En tant qu’arme de maître, elle confère un bonus d’altération de +1 aux jets d’attaque.', 'items/128px_Ravening_Wings_Stifling_Dagger_icon.png'),
(2, 'Epée ardente', 3, 789, 'Cette arme est une épée longue +1 de feu intense. Une fois par jour, elle peut émettre un rayon brûlant vers une cible se trouvant à 9 mètres ou moins. Si le porteur réussit un jet d’attaque de contact à distance contre la cible, celle-ci subit 4d6 points de dégâts de feu.', 'items/Twin_Blades_Assassin_Jinada.png'),
(3, 'Habit de paysan', 1, 10, 'Chemise ample et haut-de-chausse à l’avenant, ce dernier étant remplacé par une jupe pour les femmes. Les pieds sont protégés par plusieurs épaisseurs de tissu enroulé.', ''),
(4, 'Aimant', 2, 156, 'Cette barre de métal est aimanté et peut donc attiré les métaux ferreux, tel que le fer ou l''acier. l''aimant peut soulever jusqu''à 1 kg de matière ferreuse si elle entre au contact avec l''objet en question. Il peut aussi attirer des objets métalliques de 150 g ou moins jusqu''à une distance de 30 centimètres.', '');

-- --------------------------------------------------------

--
-- Structure de la table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `names`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `tier` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `description` text,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `tier`, `xp`, `description`, `subcategory_id`) VALUES
(1, 'Barbare', 1, 0, 'Les barbares sont d''excellents combattants. Mais tandis que l''efficacité des guerriers provient de leur entraînement rigoureux, celle des barbares provient de la rage qui les anime. Quand la fureur du combat déferle en eux, ils deviennent brusquement plus forts et plus résistants aux attaques. Maintenir un tel état nécessite une incroyable dépense d''énergie et les laisse épuisés, aussi doivent-ils vaincre rapidement, ce qui ne leur pose généralement pas de problèmes. A l''aise dans les contrées sauvages, ils se déplacent très rapidement au pas de course.', 19),
(2, 'Moine', 2, 150, 'Les moines considèrent chaque nouvelle aventure comme une mise à l''épreuve. Bien qu''ils ne soient pas du genre à se mettre en avant, ils n''hésitent pas à utiliser leur talent pour le combat dès que quelqu''un s''oppose à eux. Les possessions matérielles ne les intéressent pas. Par contre, ils cherchent avidement tout ce qui leur permettra de perfectionner leur art.', 0),
(3, 'Prêtre', 1, 0, 'Les prêtres sont les maîtres de la magie divine, particulièrement efficace pour guérir les maux de toute sorte. Même un prêtre débutant peut ramener un mourant à la vie, et beaucoup sont capables de faire revenir d''entre les morts ceux qui ont fait le grand saut. L''énergie divine que les prêtres canalisent leur permet d''affecter les morts-vivants. Les prêtres bons peuvent les repousser, voire de les détruire, tandis que les prêtres malfaisants ont pour leur part le pouvoir de les intimider ou de les contrôler. Les prêtres bénéficient également d''un certain entraînement au combat. Ils savent utiliser toutes les armes courantes et se sont formés à porter l''armure, cette dernière n''interférant pas avec la magie divine comme elle le fait avec la magie profane.', 0),
(4, 'Paladin', 2, 200, 'Les paladins prennent leur tâche très au sérieux, mais préfèrent dire qu''ils partent en "quête" plutôt qu''à l''aventure. Même une mission en apparence anodine est perçue comme une épreuve, une occasion de montrer son courage, d''améliorer ses compétences martiales et de faire le bien. Mais c''est lorsqu''ils conduisent une campagne contre les forces du Mal que les paladins se sentent dans leur élément, pas quand ils pillent des ruines.', 0),
(5, 'Barde', 1, 0, 'On dit souvent que la musique est magique, et le barde le prouve tous les jours. Se rendre d''un pays à l''autre pour découvrir de nouvelles légendes, conter des histoires et jouer de la musique pour vivre de la générosité de son public, telle est la vie du barde. Quand le hasard l''entraîne dans un conflit, il fait souvent office de diplomate, négociateur, messagers, éclaireur ou espion.', 0),
(6, 'Bob', 3, 24, '4redf', 12);

-- --------------------------------------------------------

--
-- Structure de la table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `subcategories`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `gold` int(11) NOT NULL DEFAULT '0',
  `role` varchar(45) NOT NULL DEFAULT 'Member',
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `gold`, `role`, `active`) VALUES
(14, 'Felix', '$2a$10$zuzIxh/2iQpSW6Rcw1p6yunt8NtcZ19tqpLXuUGC9Pxb9hTs23NXq', 'Fwilhelmy@hotmail.com', 234, 'Admin', 1),
(15, 'Nawat', '$2a$10$5n7TOr3wxInvnzXhlDknKekdzeamlXjQax3qYKz3z3QvK2Qq6E6ay', 'nawat@patate.ninja', 0, 'Member', 1),
(16, 'FixIt', '$2a$10$RNLW.dB1JNrUqNidutaFDuNwOuXedLr4k5q7bZEAaiCJ8jpV4/t6G', 'FixIt@momo.qc', 0, 'Member', 1),
(38, 'Mama', '$2a$10$Lb1qbqOdiCtFZMzEqhU4Jun0C2Rhxayo2yNAZIOJOCIYAq2xkTEMi', 'wenzavGames@gmail.com', 0, 'Member', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`name`);

--
-- Index pour la table `characters_items`
--
ALTER TABLE `characters_items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `guilds`
--
ALTER TABLE `guilds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`name`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`name`);

--
-- Index pour la table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`name`);

--
-- Index pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`username`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `characters_items`
--
ALTER TABLE `characters_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `guilds`
--
ALTER TABLE `guilds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
