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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
