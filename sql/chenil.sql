-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 18 juin 2022 à 18:14
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chenil`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `fk_sexe` int(11) NOT NULL,
  `fk_race` int(11) NOT NULL,
  `chaleur` date NOT NULL,
  `dn` date NOT NULL,
  `veto` varchar(100) NOT NULL,
  `puce` varchar(15) NOT NULL,
  `fk_proprio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sexe` (`fk_sexe`),
  KEY `fk_race` (`fk_race`),
  KEY `fk_proprio` (`fk_proprio`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `nom`, `fk_sexe`, `fk_race`, `chaleur`, `dn`, `veto`, `puce`, `fk_proprio`) VALUES
(9, 'Rox', 2, 342, '2004-07-04', '2001-05-01', 'Dupont', '232156753896452', 82),
(10, 'Rouky', 3, 344, '2021-02-02', '2021-02-02', 'Boucher', '252456874563154', 85),
(11, 'Belle', 4, 333, '2015-08-07', '2012-06-05', 'Battant', '145698752456236', 82);

-- --------------------------------------------------------

--
-- Structure de la table `localites`
--

DROP TABLE IF EXISTS `localites`;
CREATE TABLE IF NOT EXISTS `localites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cp` int(4) NOT NULL,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `localites`
--

INSERT INTO `localites` (`id`, `cp`, `nom`) VALUES
(1, 1300, 'Wavre'),
(2, 1300, 'Limal'),
(3, 1301, 'Bierges'),
(4, 1315, 'Glimes'),
(5, 1315, 'Incourt'),
(6, 1315, 'Opprebais'),
(7, 1315, 'Roux-Miroir'),
(8, 1320, 'Beauvechain'),
(9, 1320, 'Hamme-Mille'),
(10, 1320, 'L\'Ecluse'),
(11, 1320, 'Nodebais'),
(12, 1325, 'Bonlez'),
(13, 1325, 'Chaumont-Gistoux'),
(14, 1325, 'Corroy-le-Grand'),
(15, 1325, 'Dion-Valmont'),
(16, 1325, 'Longueville'),
(17, 1330, 'Rixensart'),
(18, 1331, 'Rosieres'),
(19, 1332, 'Genval'),
(20, 1340, 'Ottignies-Louvain-la-Neuve'),
(21, 1340, 'Ottignies'),
(22, 1341, 'Ceroux-Mousty'),
(23, 1342, 'Limelette'),
(24, 1348, 'Louvain-la-Neuve'),
(25, 1350, 'Orp-Jauche'),
(26, 1350, 'Enines'),
(27, 1350, 'Folx-les-Caves'),
(28, 1350, 'Jandrain-Jandrenouille'),
(29, 1310, 'La Hulpe'),
(30, 1315, 'Pietrebais'),
(31, 1320, 'Tourinnes-la-Grosse'),
(32, 1350, 'Jauche'),
(33, 1350, 'Marilles'),
(34, 1350, 'Noduwez'),
(35, 1350, 'Orp-le-Grand'),
(36, 1357, 'Helecine'),
(37, 1357, 'Linsmeau'),
(38, 1357, 'Neerheylissem'),
(39, 1357, 'Opheylissem'),
(40, 1360, 'Maleves-Sainte-Marie-Wastines'),
(41, 1360, 'Orbais'),
(42, 1360, 'Perwez'),
(43, 1360, 'Thorembais-les-Beguines'),
(44, 1360, 'Thorembais-Saint-Trond'),
(45, 1367, 'Autre-Eglise'),
(46, 1367, 'Gerompont'),
(47, 1367, 'Bomal'),
(48, 1367, 'Geest-Gerompont-Petit-Rosiere'),
(49, 1367, 'Mont-Saint-Andre'),
(50, 1367, 'Grand-Rosiere-Hottomont'),
(51, 1367, 'Huppaye'),
(52, 1367, 'Ramillies'),
(53, 1370, 'Dongelberg'),
(54, 1370, 'Jauchelette'),
(55, 1370, 'Jodoigne'),
(56, 1370, 'Jodoigne-Souveraine'),
(57, 1370, 'Lathuy'),
(58, 1370, 'Melin'),
(59, 1370, 'Pietrain'),
(60, 1370, 'Saint-Jean-Geest'),
(61, 1370, 'Saint-Remy-Geest'),
(62, 1370, 'Zetrud-Lumay'),
(63, 1380, 'Lasne'),
(64, 1380, 'Couture-Saint-Germain'),
(65, 1380, 'Lasne-Chapelle-Saint-Lambert'),
(66, 1380, 'Maransart'),
(67, 1380, 'Ohain'),
(68, 1380, 'Plancenoit'),
(69, 1390, 'Archennes'),
(70, 1390, 'Biez'),
(71, 1390, 'Bossut-Gottechain'),
(72, 1390, 'Grez-Doiceau'),
(73, 1390, 'Nthen'),
(74, 1400, 'Monstreux'),
(75, 1400, 'Nivelles'),
(76, 1401, 'Baulers'),
(77, 1402, 'Thines'),
(78, 1404, 'Bornival'),
(79, 1410, 'Waterloo'),
(80, 1420, 'Braine-l\'Alleud'),
(81, 1421, 'Ophain-Bois-Seigneur-Isaac'),
(82, 1428, 'Lillois-Witterzee'),
(83, 1430, 'Rebecq'),
(84, 1430, 'Bierghes'),
(85, 1430, 'Quenast'),
(86, 1430, 'Rebecq-Rognon'),
(87, 1435, 'Corbais'),
(88, 1435, 'Hevillers'),
(89, 1435, 'Mont-Saint-Guibert'),
(90, 1440, 'Braine-le-Chateau'),
(91, 1440, 'Waulthier-Braine'),
(92, 1450, 'Chastre'),
(93, 1450, 'Chastre-Villeroux-Blanmont'),
(94, 1450, 'Cortil-Noirmont'),
(95, 1450, 'Gentinnes'),
(96, 1450, 'Saint-Gery'),
(97, 1457, 'Walhain'),
(98, 1457, 'Nil-Saint-Vincent-Saint-Martin'),
(99, 1457, 'Tourinnes-Saint-Lambert'),
(100, 1457, 'Walhain-Saint-Paul'),
(101, 1460, 'Ittre'),
(102, 1460, 'Virginal-Samme'),
(103, 1461, 'Haut-Ittre'),
(104, 1470, 'Baisy-Thy'),
(105, 1470, 'Bousval'),
(106, 1470, 'Genappe'),
(107, 1471, 'Loupoigne'),
(108, 1472, 'Vieux-Genappe'),
(109, 1473, 'Glabais'),
(110, 1474, 'Ways'),
(111, 1476, 'Houtain-le-Val'),
(112, 1480, 'Clabecq'),
(113, 1480, 'Oisquercq'),
(114, 1480, 'Saintes'),
(115, 1480, 'Tubize'),
(116, 1490, 'Court-Saint-Etienne'),
(117, 1495, 'Marbais'),
(118, 1495, 'Mellery'),
(119, 1495, 'Sart-Dames-Avelines'),
(120, 1495, 'Tilly'),
(121, 1495, 'Villers-la-Ville');

-- --------------------------------------------------------

--
-- Structure de la table `proprietaires`
--

DROP TABLE IF EXISTS `proprietaires`;
CREATE TABLE IF NOT EXISTS `proprietaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dn` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `fk_localite` int(11) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `proprietaires_ibfk_1` (`fk_localite`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proprietaires`
--

INSERT INTO `proprietaires` (`id`, `nom`, `prenom`, `dn`, `adresse`, `fk_localite`, `tel`, `email`, `contact`) VALUES
(82, 'Cugnon', 'Geoffrey', '1990-10-07', 'Avenue de la comÃ¨te de Halley 41', 2, '+32498784737', 'geoffrey.cugnon@gmail.com', '+32476975856'),
(83, 'Bond', 'James', '1965-05-04', 'Rue du gÃ©nÃ©ral 7', 28, '0032495658975', 'james@bond.com', '0032478563245'),
(84, 'Wayne', 'Bruce', '1987-05-07', 'ScavÃ©e de la grotte 1', 63, '+32495235698', 'iamthebatman@super.hero', '0032476589874'),
(85, 'Superprof', 'Ben', '1900-04-01', 'Boulevard du code 404', 1, '+32133713371', 'ben_the_super_prof@ifosup.wavre', '+32733173317');

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

DROP TABLE IF EXISTS `races`;
CREATE TABLE IF NOT EXISTS `races` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=382 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `races`
--

INSERT INTO `races` (`id`, `nom`) VALUES
(332, 'Berger australien'),
(333, 'Berger belge'),
(334, 'Staffordshire Bull Terrier'),
(335, 'Golden Retriever'),
(336, 'Berger Allemand'),
(337, 'American Staffordshire Terrier'),
(338, 'Labrador'),
(339, 'Cavalier King Charles'),
(340, 'Bouledogue Francais'),
(341, 'Cocker Spaniel Anglais'),
(342, 'Beagle'),
(343, 'Setter Anglais'),
(344, 'Chihuahua'),
(345, 'Cane Corso'),
(346, 'Epagneul Breton'),
(347, 'Husky de Siberie'),
(348, 'Yorkshire Terrier'),
(349, 'Teckel'),
(350, 'Spitz Allemand'),
(351, 'Bouvier Bernois'),
(352, 'Jack Russell'),
(353, 'Rottweiler'),
(354, 'Border Collie'),
(355, 'Berger Blanc Suisse'),
(356, 'Chien de Berger des Shetland'),
(357, 'Berger de Beauce'),
(358, 'Bouledogue Anglais'),
(359, 'Boxer'),
(360, 'Shih Tzu'),
(361, 'Coton de Tulear'),
(362, 'Terre-Neuve'),
(363, 'Shiba Inu'),
(364, 'Akita Inu'),
(365, 'Samoyede'),
(366, 'Carlin'),
(367, 'Dogue Argentin'),
(368, 'Dogue Allemand'),
(369, 'Saint-Bernard'),
(370, 'Bichon Maltais'),
(371, 'Malamute de l\'Alaska'),
(372, 'Braque de Weimar'),
(373, 'Shar-Pei'),
(374, 'Dogue de Bordeaux'),
(375, 'Caniche'),
(376, 'Mastiff'),
(377, 'Dobermann'),
(378, 'Dalmatien'),
(379, 'Dogue du Tibet'),
(380, 'Berger des Pyrenees'),
(381, 'Pinscher');

-- --------------------------------------------------------

--
-- Structure de la table `sejours`
--

DROP TABLE IF EXISTS `sejours`;
CREATE TABLE IF NOT EXISTS `sejours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_animal` int(11) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_animal` (`fk_animal`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sejours`
--

INSERT INTO `sejours` (`id`, `fk_animal`, `debut`, `fin`) VALUES
(11, 9, '2022-06-05', '2022-06-10'),
(12, 11, '2022-07-07', '2022-08-01');

-- --------------------------------------------------------

--
-- Structure de la table `sexes`
--

DROP TABLE IF EXISTS `sexes`;
CREATE TABLE IF NOT EXISTS `sexes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sexes`
--

INSERT INTO `sexes` (`id`, `nom`) VALUES
(1, 'Male castre'),
(2, 'Male non castre'),
(3, 'Femelle sterilisee'),
(4, 'Femelle non sterilisee');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`fk_sexe`) REFERENCES `sexes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `animaux_ibfk_2` FOREIGN KEY (`fk_race`) REFERENCES `races` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `animaux_ibfk_3` FOREIGN KEY (`fk_proprio`) REFERENCES `proprietaires` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  ADD CONSTRAINT `proprietaires_ibfk_1` FOREIGN KEY (`fk_localite`) REFERENCES `localites` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `sejours`
--
ALTER TABLE `sejours`
  ADD CONSTRAINT `sejours_ibfk_1` FOREIGN KEY (`fk_animal`) REFERENCES `animaux` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
