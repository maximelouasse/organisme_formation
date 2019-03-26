-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 mars 2019 à 18:24
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `organisme_formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte_rendus`
--

DROP TABLE IF EXISTS `compte_rendus`;
CREATE TABLE IF NOT EXISTS `compte_rendus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `professeurs_id` int(11) NOT NULL,
  `sessions_id` int(11) NOT NULL,
  `commentaire` varchar(45) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_compte_rendus_professeurs1_idx` (`professeurs_id`),
  KEY `fk_compte_rendus_sessions1_idx` (`sessions_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `compte_rendus`
--

INSERT INTO `compte_rendus` (`id`, `professeurs_id`, `sessions_id`, `commentaire`) VALUES
(1, 1, 2, 'Mediocre');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nom`) VALUES
(1, 'Amazon'),
(2, 'EDF');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

DROP TABLE IF EXISTS `formations`;
CREATE TABLE IF NOT EXISTS `formations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf16_bin NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `professeurs_id` int(11) NOT NULL,
  `cout` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_formations_professeurs1_idx` (`professeurs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `nom`, `dateDebut`, `dateFin`, `professeurs_id`, `cout`) VALUES
(1, 'Gestion de projet', '2019-03-01 00:00:00', '2019-03-31 00:00:00', 1, 600),
(2, 'SQL', '2019-04-19 00:00:00', '2019-05-09 00:00:00', 2, 1000),
(3, 'Git - Premiere approche', '2019-05-11 00:00:00', '2019-06-29 00:00:00', 3, 2000);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` float DEFAULT NULL,
  `salaries_id` int(11) NOT NULL,
  `formations_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_notes_formations1_idx` (`formations_id`),
  KEY `fk_notes_salaries1_idx` (`salaries_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `note`, `salaries_id`, `formations_id`) VALUES
(1, 10, 1, 1),
(2, 15, 2, 2),
(3, 11, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

DROP TABLE IF EXISTS `professeurs`;
CREATE TABLE IF NOT EXISTS `professeurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf16_bin NOT NULL,
  `prenom` varchar(45) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`id`, `nom`, `prenom`) VALUES
(1, 'Venet', 'Alexandre'),
(2, 'Leonard', 'Kevin'),
(3, 'Guibon', 'Jeremy');

-- --------------------------------------------------------

--
-- Structure de la table `salaries`
--

DROP TABLE IF EXISTS `salaries`;
CREATE TABLE IF NOT EXISTS `salaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf16_bin NOT NULL,
  `prenom` varchar(45) COLLATE utf16_bin NOT NULL,
  `poste` varchar(45) COLLATE utf16_bin NOT NULL,
  `entreprises_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_salaries_entreprises1_idx` (`entreprises_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `salaries`
--

INSERT INTO `salaries` (`id`, `nom`, `prenom`, `poste`, `entreprises_id`) VALUES
(1, 'Mohamed Cassim', 'Sylvie', 'Developpeur FrontEnd', 1),
(2, 'Houvin', 'Corentin', 'Developpeur Fullstack', 2),
(3, 'Louasse', 'Maxime', 'Developpeur BackEnd', 1);

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id`, `nom`) VALUES
(1, '01'),
(2, '02'),
(3, '03'),
(4, '04'),
(5, '05');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `professeurs_id` int(11) NOT NULL,
  `salles_id` int(11) NOT NULL,
  `formations_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sessions_professeurs1_idx` (`professeurs_id`),
  KEY `fk_sessions_salles1_idx` (`salles_id`),
  KEY `fk_sessions_formations1_idx` (`formations_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `dateDebut`, `dateFin`, `professeurs_id`, `salles_id`, `formations_id`) VALUES
(1, '2019-03-01 08:00:00', '2019-03-01 19:00:00', 1, 4, 3),
(2, '2019-03-06 10:00:00', '2019-03-06 16:00:00', 2, 2, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte_rendus`
--
ALTER TABLE `compte_rendus`
  ADD CONSTRAINT `fk_compte_rendus_professeurs1` FOREIGN KEY (`professeurs_id`) REFERENCES `professeurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compte_rendus_sessions1` FOREIGN KEY (`sessions_id`) REFERENCES `sessions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `fk_formations_professeurs1` FOREIGN KEY (`professeurs_id`) REFERENCES `professeurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `fk_notes_formations1` FOREIGN KEY (`formations_id`) REFERENCES `formations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notes_salaries1` FOREIGN KEY (`salaries_id`) REFERENCES `salaries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `fk_salaries_entreprises1` FOREIGN KEY (`entreprises_id`) REFERENCES `entreprises` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_sessions_formations1` FOREIGN KEY (`formations_id`) REFERENCES `formations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sessions_professeurs1` FOREIGN KEY (`professeurs_id`) REFERENCES `professeurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sessions_salles1` FOREIGN KEY (`salles_id`) REFERENCES `salles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
