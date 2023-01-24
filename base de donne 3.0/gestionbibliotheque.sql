-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 18 jan. 2023 à 03:10
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionbibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherant`
--

DROP TABLE IF EXISTS `adherant`;
CREATE TABLE IF NOT EXISTS `adherant` (
  `ID_ADHERANT` int NOT NULL AUTO_INCREMENT,
  `NOM_ADHERANT` varchar(30) DEFAULT NULL,
  `PRENOM_ADHERANT` varchar(30) DEFAULT NULL,
  `ATE_NAISS_ADHERANT` date DEFAULT NULL,
  `ADRESSE_ADHERANT` varchar(30) DEFAULT NULL,
  `TEL_ADHERANT` int DEFAULT NULL,
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

--
-- Déchargement des données de la table `admin_biblio`
--

INSERT INTO `admin_biblio` (`LOGIN_AD`, `PASSWORD_AD`, `NOM_AD`, `PRENOM_AD`, `DATE_NAISSANCE_AD`) VALUES
('admin', 'admin', 'Kodjo', 'Souleymane', '2000-01-22');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `ID_AUTEUR` int NOT NULL AUTO_INCREMENT,
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
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `ISBN` int NOT NULL,
  `ID_AUTEUR` int NOT NULL AUTO_INCREMENT,
  `TITRE_LIVRE` varchar(30) DEFAULT NULL,
  `LANGUE_LIVRE` varchar(30) DEFAULT NULL,
  `NBRE_EXPLAIRE_LIVRE` int DEFAULT NULL,
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
(97877, 24, 'For Bread Alone', 'anglais', 32);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
