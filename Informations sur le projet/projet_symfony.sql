-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 avr. 2025 à 17:42
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `login`, `mdp`, `nom`, `prenom`, `statut`) VALUES
(1, 'Thibault', 'f3e74cf193834b8a85cbae7a2dcc5ce6', 'Rodrigues-seabra', 'Thibault', 1),
(2, 'toto', 'f3e74cf193834b8a85cbae7a2dcc5ce6', 'blabla', 'toto', 0),
(3, 'tata', 'f3e74cf193834b8a85cbae7a2dcc5ce6', 'Castaing', 'tata', 0),
(4, 'titi', 'f3e74cf193834b8a85cbae7a2dcc5ce6', 'Castaing', 'titi', 0),
(5, 'toto', 'f3e74cf193834b8a85cbae7a2dcc5ce6', 'Castaing', 'toto', 0),
(6, 'tutu', 'f3e74cf193834b8a85cbae7a2dcc5ce6', 'Castaing', 'tutu', 0),
(7, 'Jean', 'f3e74cf193834b8a85cbae7a2dcc5ce6', 'Demoter', 'Jean', 0);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `nbre_heures` int NOT NULL,
  `departement` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `le_produit_id` int DEFAULT NULL,
  `sommaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_404021BF2C340150` (`le_produit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `date_debut`, `nbre_heures`, `departement`, `le_produit_id`, `sommaire`) VALUES
(3, '2024-11-29', 8, '77550', 4, ''),
(4, '2024-12-02', 50, '77550', 3, ''),
(5, '2024-12-07', 75, '93000', 1, ''),
(6, '2024-12-12', 50, '93000', 1, 'Utilisations de base puis stylisations de l\'écrit'),
(8, '2025-05-01', 99, '75000', 1, 'très dur');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `statut` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lemploye_id` int DEFAULT NULL,
  `la_formation_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5E90F6D6D3758FF7` (`lemploye_id`),
  KEY `IDX_5E90F6D6C6E58DBA` (`la_formation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`) VALUES
(1, 'word'),
(2, 'java'),
(3, 'powerpoint'),
(4, 'javascript'),
(5, 'Bootstrap');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_404021BF2C340150` FOREIGN KEY (`le_produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `FK_5E90F6D6C6E58DBA` FOREIGN KEY (`la_formation_id`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `FK_5E90F6D6D3758FF7` FOREIGN KEY (`lemploye_id`) REFERENCES `employe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
