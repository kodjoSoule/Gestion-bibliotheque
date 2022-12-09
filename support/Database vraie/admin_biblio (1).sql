-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 20 mai 2021 à 08:24
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
