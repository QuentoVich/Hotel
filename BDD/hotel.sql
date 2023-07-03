-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 juin 2023 à 14:24
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `Code_Categorie` int(11) NOT NULL,
  `désignation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `Num_Chamb` int(11) NOT NULL,
  `etage` int(11) DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL,
  `emplacement` varchar(50) DEFAULT NULL,
  `Code_Categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Code_Client` int(11) NOT NULL,
  `prenom_Client` varchar(50) DEFAULT NULL,
  `tele_Client` smallint(6) DEFAULT NULL,
  `nationalité` varchar(50) DEFAULT NULL,
  `num_Passe` int(11) DEFAULT NULL,
  `adresse_Client` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `consulter`
--

CREATE TABLE `consulter` (
  `Code_Client` int(11) NOT NULL,
  `Num_Chamb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Num_Reservation` int(11) NOT NULL,
  `date_Reservation` date DEFAULT NULL,
  `date_Entrée` date DEFAULT NULL,
  `date_Sortie` date DEFAULT NULL,
  `Code_Client` int(11) NOT NULL,
  `Num_Chamb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Login` varchar(50) NOT NULL,
  `mot_De_Passe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Code_Categorie`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`Num_Chamb`),
  ADD KEY `Code_Categorie` (`Code_Categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Code_Client`);

--
-- Index pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD PRIMARY KEY (`Code_Client`,`Num_Chamb`),
  ADD KEY `Num_Chamb` (`Num_Chamb`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Num_Reservation`),
  ADD KEY `Code_Client` (`Code_Client`),
  ADD KEY `Num_Chamb` (`Num_Chamb`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Login`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`Code_Categorie`) REFERENCES `categorie` (`Code_Categorie`);

--
-- Contraintes pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD CONSTRAINT `consulter_ibfk_1` FOREIGN KEY (`Code_Client`) REFERENCES `client` (`Code_Client`),
  ADD CONSTRAINT `consulter_ibfk_2` FOREIGN KEY (`Num_Chamb`) REFERENCES `chambre` (`Num_Chamb`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Code_Client`) REFERENCES `client` (`Code_Client`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Num_Chamb`) REFERENCES `chambre` (`Num_Chamb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `categorie` (`Code_Categorie`, `désignation`)
VALUES
    (1, 'Suite'),
    (2, 'Chambre Double'),
    (3, 'Chambre Simple');


INSERT INTO `chambre` (`Num_Chamb`, `etage`, `prix`, `emplacement`, `Code_Categorie`)
VALUES
    (31, 1, 100.00, 'Vue sur la mer', 1),
    (32, 1, 80.00, 'Vue sur la piscine', 2),
    (33, 2, 90.00, 'Vue sur le jardin', 2),
    (34, 2, 120.00, 'Vue panoramique', 1),
    (35, 3, 70.00, 'Vue sur la ville', 2),
    (36, 3, 110.00, 'Vue sur la mer', 1),
    (37, 4, 130.00, 'Vue panoramique', 1),
    (38, 4, 95.00, 'Vue sur le jardin', 2),
    (39, 1, 85.00, 'Vue sur la piscine', 2),
    (40, 2, 75.00, 'Vue sur la mer', 2),
    (41, 3, 105.00, 'Vue sur la ville', 1),
    (42, 4, 115.00, 'Vue panoramique', 1),
    (43, 1, 95.00, 'Vue sur le jardin', 2),
    (44, 2, 120.00, 'Vue sur la mer', 1),
    (45, 3, 80.00, 'Vue sur la piscine', 2),
    (46, 4, 110.00, 'Vue panoramique', 1),
    (47, 1, 70.00, 'Vue sur la ville', 2),
    (48, 2, 90.00, 'Vue sur la mer', 2),
    (49, 3, 100.00, 'Vue sur le jardin', 1),
    (50, 4, 125.00, 'Vue panoramique', 1),
    (51, 1, 105.00, 'Vue sur la piscine', 2),
    (52, 2, 85.00, 'Vue sur la mer', 1),
    (53, 3, 115.00, 'Vue sur la ville', 1),
    (54, 4, 75.00, 'Vue panoramique', 2),
    (55, 1, 120.00, 'Vue sur le jardin', 1),
    (56, 2, 70.00, 'Vue sur la mer', 2),
    (57, 3, 90.00, 'Vue sur la piscine', 2),
    (58, 4, 100.00, 'Vue panoramique', 1),
    (59, 1, 110.00, 'Vue sur la ville', 1),
    (60, 2, 95.00, 'Vue sur le jardin', 2);