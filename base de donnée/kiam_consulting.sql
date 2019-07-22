-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 22 juil. 2019 à 23:09
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kiam_consulting`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `titre`, `etat`, `description`) VALUES
(2, 'oui', NULL, 'gh'),
(3, 'io', 1, 'io'),
(4, 'rio', 1, 'rio'),
(5, 'ar', 0, 'za');

-- --------------------------------------------------------

--
-- Structure de la table `admin_root`
--

DROP TABLE IF EXISTS `admin_root`;
CREATE TABLE IF NOT EXISTS `admin_root` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `compagny_name` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '0',
  `date_deconnexion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin_root`
--

INSERT INTO `admin_root` (`id`, `username`, `email`, `password`, `nom`, `prenom`, `compagny_name`, `phone`, `date_ajout`, `role`, `etat`, `date_deconnexion`) VALUES
(1, 'admins', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'armand', 'cyrille', 'kiam consulting', 54426394, '2019-06-30 22:37:36', '', 1, '2019-07-15 03:26:19'),
(6, 'cyrille80', 'kayonzeukoufabriceraoul1@esprit.tn', '81dc9bdb52d04dc20036dbd8313ed055', 'armand', 'nzeukou', NULL, NULL, '2019-07-02 03:33:55', 'Droit d\'acces,Ajouter une ecole,Supprimer une ecole,Modifier une ecole,Afficher une ecole,', 0, '2019-07-15 21:53:30'),
(7, 'romuald', 'romuald@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, '2019-07-04 19:15:13', 'Ajouter une ecole,', 0, '2019-07-06 18:01:22'),
(13, 'ju', 'akougangnzeukou@esprit.tn', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL, NULL, '2019-07-06 18:08:48', 'Ajouter une ecole,', 1, '2019-07-06 18:01:13'),
(14, 'uio1', 'avar1d@esprit.tn', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL, NULL, '2019-07-09 22:13:47', 'Ajouter administrateur,Afficher la liste administrateur,Supprimer une ecole,', 0, '2019-07-09 21:14:25'),
(15, '1', 'armandcyrille.takougangnzeukou@esprit.tn', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL, NULL, '2019-07-12 14:39:16', 'Supprimer administrateur,Modifier administrateur,', 0, '2019-07-12 13:39:16');

-- --------------------------------------------------------

--
-- Structure de la table `concours`
--

DROP TABLE IF EXISTS `concours`;
CREATE TABLE IF NOT EXISTS `concours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `heure` varchar(255) NOT NULL,
  `date_concour` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `concours`
--

INSERT INTO `concours` (`id`, `titre`, `description`, `heure`, `date_concour`) VALUES
(10, ' MathÃ©matiques 2019', 'ce concour portera sur tout le programme de terminale', '09,30', '07/26/2019');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `adresseMail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_expediteur` int(11) DEFAULT NULL,
  `id_receveur` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_expediteur`, `id_receveur`, `message`, `date`) VALUES
(40, 1, 13, 'Bonjour ju!!!!\n', '2019-07-06 18:18:50'),
(41, 1, 13, '', '2019-07-06 19:02:08'),
(42, 1, 13, 'azeazea\n', '2019-07-06 19:07:58'),
(46, 1, 14, 'Hello !\n', '2019-07-11 00:57:04'),
(47, 1, 14, 'Bonjour les mais\n', '2019-07-12 00:41:26'),
(48, 1, 14, 'je veux savoir si tu fonctionnes bien ?\n', '2019-07-12 00:41:59'),
(49, 1, 6, 'moi\n', '2019-07-15 22:37:17'),
(50, 1, 6, 'Bonjour ici\n', '2019-07-18 17:08:25');

-- --------------------------------------------------------

--
-- Structure de la table `proccedure`
--

DROP TABLE IF EXISTS `proccedure`;
CREATE TABLE IF NOT EXISTS `proccedure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `fichier` int(11) DEFAULT NULL,
  `id_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proccedure`
--

INSERT INTO `proccedure` (`id`, `titre`, `description`, `fichier`, `id_active`) VALUES
(12, 'fdf', 'bn', 1, 2),
(13, 'y', 'y', 1, 2),
(14, 'bn', 'bn', 1, 2),
(15, 'bnn', 'bnn', 1, 2),
(16, 'momo', 'momo', 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `qizz`
--

DROP TABLE IF EXISTS `qizz`;
CREATE TABLE IF NOT EXISTS `qizz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_concour` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `reponse` varchar(255) DEFAULT NULL,
  `autre_reponse` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `qizz`
--

INSERT INTO `qizz` (`id`, `id_concour`, `question`, `reponse`, `autre_reponse`) VALUES
(2, 10, NULL, NULL, NULL),
(3, 10, 'm', 'm', 'm;m1re;m;'),
(4, 0, 'io', '1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `nombre_place` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `school`
--

INSERT INTO `school` (`id`, `titre`, `ville`, `site`, `nombre_place`) VALUES
(4, ' avardss', 'suisse', 'ognon.org', 90),
(5, ' kiki', 'kl', 'mo', 5);

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_receveur` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `task`
--

INSERT INTO `task` (`id`, `id_receveur`, `message`, `date_ajout`, `etat`) VALUES
(3, 6, 'ajoutez moi un user', '2019-07-15 20:50:53', 1),
(5, 6, 'moi', '2019-07-15 20:52:02', 1),
(8, 7, 'toto', '2019-07-15 21:35:54', 0),
(9, 6, 'ne te renferme pas sur toi', '2019-07-18 16:08:42', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
