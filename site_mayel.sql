-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 mai 2024 à 14:20
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
-- Base de données : `site_mayel`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id_A` int NOT NULL,
  `note` decimal(1,1) DEFAULT NULL,
  `Commentaire` text,
  PRIMARY KEY (`id_A`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id_A`, `note`, `Commentaire`) VALUES
(6542, '0.9', 'Je suis très satisfait du service fournit par Mayel. De plus, la livraison est de qualité. Je recommande !'),
(6541, '0.9', 'Je suis satisfait');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_C` int NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Prénom` varchar(15) NOT NULL,
  `E-mai` varchar(50) NOT NULL,
  `Téléphone` int NOT NULL,
  `Domicile` varchar(60) NOT NULL,
  `NC` int NOT NULL,
  `id_F` int NOT NULL,
  PRIMARY KEY (`id_C`),
  KEY `NC` (`NC`),
  KEY `id_F` (`id_F`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_C`, `Nom`, `Prénom`, `E-mai`, `Téléphone`, `Domicile`, `NC`, `id_F`) VALUES
(5963, 'Dhénaux', 'Bryan', 'dhenaux.bryan@gmail.com', 759632141, '10 rue des cailles 91800 Brunoy', 17, 3564),
(5964, 'Boulanger', 'Denis', 'boulanger.denis@hotmail.com', 759632142, '10 rue du vilier 75001 Paris', 18, 3563);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `NC` int NOT NULL,
  `Référence` varchar(20) NOT NULL,
  `Prix` decimal(2,2) NOT NULL,
  `id_F` int NOT NULL,
  PRIMARY KEY (`NC`),
  KEY `id_F` (`id_F`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`NC`, `Référence`, `Prix`, `id_F`) VALUES
(4564, '9010', '0.99', 3564);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(1, 'Vilaine', 'Charles', 'thiienvn@gmail.com', 'caca'),
(2, 'Vilaine', 'Charles', 'vtacharles@yahoo.com', 'ouhhhh le caca'),
(3, 'Vilaine', 'Charles', 'charles.vilaine@etu.u-pec.fr', 'babababba'),
(4, 'Vilaine', 'Charles', 'vtacharles@yahoo.com', 'salut'),
(6, 'Vilaine', 'Charles', 'vtacharles@yahoo.com', 'salur');

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

DROP TABLE IF EXISTS `contient`;
CREATE TABLE IF NOT EXISTS `contient` (
  `NC` int NOT NULL,
  `id_P` int NOT NULL,
  `Quantité` int NOT NULL,
  KEY `NC` (`NC`),
  KEY `id_P` (`id_P`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`NC`, `id_P`, `Quantité`) VALUES
(18, 2356, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ecrire`
--

DROP TABLE IF EXISTS `ecrire`;
CREATE TABLE IF NOT EXISTS `ecrire` (
  `id_C` int NOT NULL,
  `id_A` int NOT NULL,
  KEY `id_C` (`id_C`),
  KEY `id_A` (`id_A`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ecrire`
--

INSERT INTO `ecrire` (`id_C`, `id_A`) VALUES
(5964, 6542);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_F` int NOT NULL,
  `Prix` decimal(2,2) DEFAULT NULL,
  `Date_et_heure` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_F`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id_F`, `Prix`, `Date_et_heure`) VALUES
(1456, '0.99', '2024-03-26 14:50:09');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id_F` int NOT NULL,
  `Référence_souhaitée` varchar(20) NOT NULL,
  `E_mail` varchar(30) NOT NULL,
  `Adresse_livraison` varchar(60) NOT NULL,
  `id_C` int NOT NULL,
  PRIMARY KEY (`id_F`),
  KEY `id_C` (`id_C`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id_F`, `Référence_souhaitée`, `E_mail`, `Adresse_livraison`, `id_C`) VALUES
(1547, 'Intense Kiwi-Menthe ', 'boulanger.denis@hotmail.com', '10 rue du vilier 75001 Paris', 5632);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id_L` int NOT NULL,
  `Adresse_de_Livraison` varchar(60) NOT NULL,
  `Type_de_livraison` varchar(20) NOT NULL,
  PRIMARY KEY (`id_L`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id_L`, `Adresse_de_Livraison`, `Type_de_livraison`) VALUES
(7415, '10 rue du vilier 75001 Paris', '1'),
(7414, '10 rue du vilier 75001 Paris', 'Retrait pickup');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_P` int NOT NULL,
  `Libelle` varchar(50) NOT NULL,
  `Prix` decimal(2,2) NOT NULL,
  `Gamme` varchar(20) NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'Mettre les adresses des photos des bières.',
  PRIMARY KEY (`id_P`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_P`, `Libelle`, `Prix`, `Gamme`, `photo`) VALUES
(2, 'Hibiscus', '0.99', 'Intense', 'hibiscus.jpg'),
(0, 'Kiwi - Menthe verte', '0.99', 'Intense', 'kiwimenthe.jpg'),
(1, 'Fraise des bois - Rhubarbe', '0.99', 'Intense', 'fraiserhu.jpg'),
(3, 'Vanille', '0.99', 'Intense', 'vanille.jpg'),
(4, 'Chocolat', '0.99', 'Intense', 'chocolat.jpg'),
(5, 'Yuzu - Litchi', '0.99', 'Intense', 'yuzulitchi.jpg'),
(6, 'Safran', '0.99', 'Prestige', 'safran.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
