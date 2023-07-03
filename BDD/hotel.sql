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

INSERT INTO `categorie` (`Code_Categorie`, `désignation`)
VALUES
    (1, 'Suite'),
    (2, 'Chambre Double'),
    (3, 'Chambre Simple');

--Ajouter des clients --
INSERT INTO client (Code_Client , prenom_Client , tele_Client , nationalité ,	num_Passe , adresse_Client)
Values 
( 1,"John",1234567890,"France","AB1C234D","123 Main Street"),
(2,"Sophia",9876543210,"Germany","EF5G678H","456 Elm Street"),
(3,"Michael",5678901234,"Brazil","IJ9K012L","789 Oak Street"),
(4,"Emily",1029384756,"China","MN3P456Q","321 Pine Street"),
(5,"Daniel",9876543210,"India","RS7T890U","987 Maple Avenue"),
(6,"Jane",3456789012,"Mexico","VW4X567Y","123 Main Street"),
(7,"Olivia",6789012345,"Canada","ZA1B234C","456 Elm Street"),
(8,"Matthew",9012345678,"USA","DE5F678G","789 Oak Street"),
(9,"Emma",5432109876,"Australia","HI9J012K","321 Pine Street"),
(10,"Sophia",7654321098,"Germany","LM3N456P","987 Maple Avenue"),
(11,"John",2345678901,"Canada","QR7S890T","123 Main Street"),
(12,"David",6789012345,"USA","UV4W567X","456 Elm Street"),
(13,"Emily",0987654321,"Japan","YZ1A234B","789 Oak Street"),
(14,"Michael",5432109876,"China","BC2D345E","321 Pine Street"),
(15,"Emma",2109876543,"France","FG3H456I","987 Maple Avenue");


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



--Ajouter des utlisateurs-- 
INSERT INTO utilisateur(Login	, mot_De_Passe) 
VALUES
(1, "jfqdwecx", "X%9u4Lx!7g"),
(2, "klpagtbh", "1mPZ@3QwJf"),
(3, "vykrzspn", "G@5B6g0$Hz"),
(4, "ujfsbnem", "9vK&Ls!z2r"),
(5, "wslmojxq", "R@4Q1g#9Ve"),
(6, "pnhgkjmr", "7b$M2!Jz4V"),
(7, "itzqlxow", "L3@u&8zGwP"),
(8, "rmjyfkdt", "$a5!E1T2Ql"),
(9, "ebxvcfog", "T!w0N$fu7Y"),
(10, "sacpylre", "2N@!kQfz3v"),
(11, "dzxyrcwi", "6$7J4qFnXp"),
(12, "qmojsnua", "Xs!K0dG2zF"),
(13, "ftdjvgan", "4T#1jx!vAy"),
(14, "hpdmzyli", "Yz$Vq6L1Ns"),
(15, "gnwaequr", "U0%Ql2n#sj");
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