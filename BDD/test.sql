-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 juin 2023 à 09:35
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `name` varchar(50) COLLATE utf16_bin NOT NULL,
  `surname` varchar(50) COLLATE utf16_bin NOT NULL,
  `sex` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`name`, `surname`, `sex`) VALUES
('TOTO', 'MOUSSA', 'M'),
('Ruba', 'TATA', 'F'),
('Ruba', 'TATA', 'F'),
('NASSIM', 'GACEM', 'M'),
('MOUSSA', 'TATA', 'M'),
('MOUSSA', 'TATA', 'M'),
('MOUSSA', 'TATA', 'M'),
('MOUSSA', 'TATA', 'M'),
('JEAN', 'RACHID', 'H');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
