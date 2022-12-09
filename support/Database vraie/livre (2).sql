-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 20 mai 2021 à 08:25
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
