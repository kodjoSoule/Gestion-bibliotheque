-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 19 mai 2021 à 19:31
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionbibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherant`
--

DROP TABLE IF EXISTS `adherant`;
CREATE TABLE IF NOT EXISTS `adherant` (
  `ID_ADHERANT` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_ADHERANT` varchar(30) DEFAULT NULL,
  `PRENOM_ADHERANT` varchar(30) DEFAULT NULL,
  `ATE_NAISS_ADHERANT` date DEFAULT NULL,
  `ADRESSE_ADHERANT` varchar(30) DEFAULT NULL,
  `TEL_ADHERANT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ADHERANT`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adherant`
--

INSERT INTO `adherant` (`ID_ADHERANT`, `NOM_ADHERANT`, `PRENOM_ADHERANT`, `ATE_NAISS_ADHERANT`, `ADRESSE_ADHERANT`, `TEL_ADHERANT`) VALUES
(1, 'Kodjo', 'Souleymane', '2021-05-24', 'Sokorodji', 75066811);

-- --------------------------------------------------------

--
-- Structure de la table `admin_biblio`
--

DROP TABLE IF EXISTS `admin_biblio`;
CREATE TABLE IF NOT EXISTS `admin_biblio` (
  `LOGIN_AD` varchar(8) NOT NULL,
  `PASSWORD_AD` varchar(8) DEFAULT NULL,
  `NOM_AD` varchar(30) DEFAULT NULL,
  `PRENOM_AD` varchar(30) DEFAULT NULL,
  `DATE_NAISSANCE_AD` date DEFAULT NULL,
  PRIMARY KEY (`LOGIN_AD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `ID_AUTEUR` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_AUTEUR` varchar(30) DEFAULT NULL,
  `PRENOM_AUTEUR` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_AUTEUR`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`ID_AUTEUR`, `NOM_AUTEUR`, `PRENOM_AUTEUR`) VALUES
(10, 'Léopold Sédar', 'Senghor'),
(12, 'Cheikh Anta', 'Diop'),
(14, 'Cheikh Hamidou', 'Kane'),
(16, 'Ahmadou', 'Kourouma'),
(18, 'Mongo', 'Beti'),
(20, 'Amadou Hampâté ', 'Bâ'),
(22, 'Kateb', 'Yacine'),
(24, 'Mohammed', 'Choukri'),
(26, 'Assia', 'Djebar'),
(28, 'Aminata Sow', 'Fall'),
(29, 'ODA', 'ADA'),
(31, '', 'errf'),
(35, 'j', 'SSSS'),
(36, 'Kodjo', 'Soule'),
(37, 'Kodjo', 'preno1'),
(38, 'gftdgvhj', 'bh n'),
(39, 'itachi', 'uchiwa');

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `ID_EMPRUNT` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN` int(11) NOT NULL,
  `ID_ADHERANT` int(11) NOT NULL,
  `LOGIN_AD` varchar(8) NOT NULL,
  `DATE_DEBUT` date DEFAULT current_timestamp(),
  `DATE_FIN` date DEFAULT NULL,
  `NBRE_EMPRUNT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_EMPRUNT`),
  KEY `FK_EMPRUNT_CONCERNE_LIVRE` (`ISBN`),
  KEY `FK_EMPRUNT_EFFECTUER_ADHERANT` (`ID_ADHERANT`),
  KEY `FK_EMPRUNT_GERER_ADMIN_BI` (`LOGIN_AD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `ISBN` int(11) NOT NULL,
  `ID_AUTEUR` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE_LIVRE` varchar(30) DEFAULT NULL,
  `LANGUE_LIVRE` varchar(30) DEFAULT NULL,
  `NBRE_EXPLAIRE_LIVRE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ISBN`),
  KEY `FK_LIVRE_REDIGER_AUTEUR` (`ID_AUTEUR`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`ISBN`, `ID_AUTEUR`, `TITRE_LIVRE`, `LANGUE_LIVRE`, `NBRE_EXPLAIRE_LIVRE`) VALUES
(97800, 20, 'Mémoires', 'français', 66),
(97811, 10, 'OEUVRE POÉTIQUE', 'français', 15),
(97822, 12, 'Precolonial Black Africa', 'français', 25),
(97833, 16, 'Quand on refuse on dit non', 'français', 9),
(97844, 18, 'Cruel City: A Novel', 'français', 34),
(97855, 14, 'AVENTURE AMBIGUE -NE', 'français', 7),
(97866, 22, 'Nedjma', 'français', 13),
(97877, 24, 'For Bread Alone', 'anglais', 32),
(454544, 111, 'Francais', 'français', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
