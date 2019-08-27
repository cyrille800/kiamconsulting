-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2019 at 04:31 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kiam_consulting`
--
CREATE DATABASE IF NOT EXISTS `kiam_consulting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kiam_consulting`;

-- --------------------------------------------------------

--
-- Table structure for table `activite`
--

CREATE TABLE IF NOT EXISTS `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `activite`
--

INSERT INTO `activite` (`id`, `titre`, `etat`, `description`) VALUES
(7, 'deuxieme pÃ¨re', 1, 'etot fils'),
(15, 'troisiÃ¨me pÃ¨re', 1, 'description toujours ok');

-- --------------------------------------------------------

--
-- Table structure for table `activiter_client`
--

CREATE TABLE IF NOT EXISTS `activiter_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) DEFAULT NULL,
  `id_activiter` int(11) DEFAULT NULL,
  `nombre_etape_fait` int(11) DEFAULT NULL,
  `etape_actuel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `activiter_client`
--

INSERT INTO `activiter_client` (`id`, `id_client`, `id_activiter`, `nombre_etape_fait`, `etape_actuel`) VALUES
(35, 1, 7, 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `admin_root`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `admin_root`
--

INSERT INTO `admin_root` (`id`, `username`, `email`, `password`, `nom`, `prenom`, `compagny_name`, `phone`, `date_ajout`, `role`, `etat`, `date_deconnexion`) VALUES
(1, 'admins', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'armand', 'cyrille', 'kiam consulting', 54426394, '2019-06-30 22:37:36', '', 1, '2019-07-15 03:26:19'),
(6, 'cyrille80', 'kayonzeukoufabriceraoul1@esprit.tn', '81dc9bdb52d04dc20036dbd8313ed055', 'armand', 'nzeukou', NULL, NULL, '2019-07-02 03:33:55', 'Droit d''acces,Ajouter une ecole,Supprimer une ecole,Modifier une ecole,Afficher une ecole,', 0, '2019-07-15 21:53:30'),
(7, 'romuald', 'romuald@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, '2019-07-04 19:15:13', 'Ajouter une ecole,', 0, '2019-07-06 18:01:22'),
(13, 'ju', 'akougangnzeukou@esprit.tn', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL, NULL, '2019-07-06 18:08:48', 'Ajouter une ecole,', 1, '2019-07-06 18:01:13'),
(14, 'uio1', 'avar1d@esprit.tn', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL, NULL, '2019-07-09 22:13:47', 'Ajouter administrateur,Afficher la liste administrateur,Supprimer une ecole,', 0, '2019-07-09 21:14:25'),
(15, '1', 'armandcyrille.takougangnzeukou@esprit.tn', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL, NULL, '2019-07-12 14:39:16', 'Supprimer administrateur,Modifier administrateur,', 0, '2019-07-12 13:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'cyrille800', 'armand@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `concours`
--

CREATE TABLE IF NOT EXISTS `concours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `heure` varchar(255) NOT NULL,
  `date_concour` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `concours`
--

INSERT INTO `concours` (`id`, `titre`, `description`, `heure`, `date_concour`) VALUES
(10, ' MathÃ©matiques 2020', 'ce concour portera sur tout le programme de terminale', '9,30', '07/26/2019'),
(12, 'physique 2020', 'je reussi trop j''epere', '4,2', '07/29/2019');

-- --------------------------------------------------------

--
-- Table structure for table `detail_plus`
--

CREATE TABLE IF NOT EXISTS `detail_plus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ecole` int(11) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `detail_plus`
--

INSERT INTO `detail_plus` (`id`, `id_ecole`, `titre`, `description`) VALUES
(3, 4, 'leviton', 'io'),
(4, 6, 'levitons', 'kl'),
(5, 6, 'echo', 'benna');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `id_client` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `niveau_scolaire` varchar(255) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `ecole_choisie` int(11) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `sexe`, `id_client`, `pays`, `ville`, `niveau_scolaire`, `etablissement`, `ecole_choisie`, `specialite`) VALUES
(1, 'ok', 'oi', 'femme', 1, 'Mustard', 'Mustard', 'Mustard', 'vogt', 6, 'informatique');

-- --------------------------------------------------------

--
-- Table structure for table `galerie`
--

CREATE TABLE IF NOT EXISTS `galerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ecole` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `galerie`
--

INSERT INTO `galerie` (`id`, `id_ecole`) VALUES
(13, 4),
(15, 4),
(18, 4),
(19, 5),
(20, 6),
(21, 6),
(22, 6);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_expediteur` int(11) DEFAULT NULL,
  `id_receveur` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `message`
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
-- Table structure for table `proccedure`
--

CREATE TABLE IF NOT EXISTS `proccedure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `fichier` int(11) DEFAULT NULL,
  `id_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `proccedure`
--

INSERT INTO `proccedure` (`id`, `titre`, `description`, `fichier`, `id_active`) VALUES
(21, 'rio', 'dsd', 2, 7),
(22, 'Bonjour maman', 'comment vous allez ', 0, 7),
(23, 'ty', 'ty', 0, 7),
(24, 'ad', 'gdf', 1, 7),
(25, 'rios', 'f', 2, 7),
(26, 'roudourouo', 'fd', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `qizz`
--

CREATE TABLE IF NOT EXISTS `qizz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_concour` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `reponse` varchar(255) DEFAULT NULL,
  `autre_reponse` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `qizz`
--

INSERT INTO `qizz` (`id`, `id_concour`, `question`, `reponse`, `autre_reponse`) VALUES
(8, 10, 'perimÃ¨tre du carrÃ©', 'cote*cote', 'gty;gty;gty'),
(10, 12, 'a', 'a', 'a;a;a'),
(11, 12, 'io', 'io', 'io;io;io');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `nombre_place` int(11) DEFAULT NULL,
  `specialite` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `titre`, `ville`, `site`, `nombre_place`, `specialite`) VALUES
(5, ' kiki', 'kl', 'mo', 5, 'prÃ©pa;informatique;'),
(6, 'Ã©cole supÃ©rieur dâ€™ingÃ©nierie et technologie', 'Mustard', 'esprit.tn', 8, 'prÃ©pa;informatique;'),
(7, 'cv', 'Mustard', 'rien.js', 8, 'informatique;'),
(8, 'cvx', 'Mustard', 'bn', 8, 'informatique'),
(19, 'leo', 'Mustard', 'leo.tn', 6, 'prÃ©pa;informatique;');

-- --------------------------------------------------------

--
-- Table structure for table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `specialite`
--

INSERT INTO `specialite` (`id`, `titre`) VALUES
(1, 'prÃ©pa'),
(4, 'informatique');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_receveur` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `id_receveur`, `message`, `date_ajout`, `etat`) VALUES
(3, 6, 'ajoutez moi un user', '2019-07-15 20:50:53', 1),
(5, 6, 'moi', '2019-07-15 20:52:02', 1),
(8, 7, 'toto', '2019-07-15 21:35:54', 0),
(9, 6, 'ne te renferme pas sur toi', '2019-07-18 16:08:42', 0),
(10, 4, NULL, '2019-07-25 21:09:23', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
