-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 24 août 2020 à 11:18
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
-- Base de données :  `lumumba`
--

-- --------------------------------------------------------

--
-- Structure de la table `assurer`
--

DROP TABLE IF EXISTS `assurer`;
CREATE TABLE IF NOT EXISTS `assurer` (
  `idUser` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  KEY `idUser` (`idUser`),
  KEY `idFormation` (`idFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `motDePassConnexion` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `domaineintervention`
--

DROP TABLE IF EXISTS `domaineintervention`;
CREATE TABLE IF NOT EXISTS `domaineintervention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `libelleLong` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `creerPar` varchar(255) NOT NULL,
  `nomHeureFormation` int(11) NOT NULL,
  `prixFormation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `libelle`, `libelleLong`, `img`, `creerPar`, `nomHeureFormation`, `prixFormation`) VALUES
(21, 'Ecole', 'Informatique', 'https://cdn-images.welcometothejungle.com/Mx5a175nOOHTncanEGVUasbD6RMcAsLDF6S14B9nNnc/rs:auto:1500::/q:85/czM6Ly93dHRqLXByb2R1Y3Rpb24vdXBsb2Fkcy9hcnRpY2xlL2ltYWdlLzI5OTEvMTUwMzMyL2ZpY2hlLWVjb2xlLTQyLXhhdmllci1uaWVsLWNvZGUuanBn', 'Rachid soiba', 500, 9000),
(23, 'Vendeur', 'Vendeur', 'https://prospecvente.com/wp-content/uploads/2011/03/bon-vendeur.jpg', 'makosso steave', 40, 800),
(30, 'Boulanger', 'Vendeur de pain exceptionnel', 'https://www.conflans-sainte-honorine.fr/wp-content/uploads/2017/07/Boulangerie-illustration-800x435.jpg', 'makosso steave', 20, 600),
(33, 'secouriste', 'secours pour les pauvres', 'https://www.mairie-bailly.fr/wp-content/uploads/2017/10/secourisme.jpg', 'makosso steave', 500, 3850),
(35, 'Coiffeur', 'formation de coiffure', 'https://valessio-coiffeur-paris.fr/wp-content/uploads/2018/12/coiffeur-droits-légal.jpg', 'makosso steave', 30, 500),
(36, 'designer', 'Apprendre le design', 'https://www.letudiant.fr/static/uploads/mediatheque/ETU_ETU/8/9/2211989-adobestock-154439873-866x495.jpeg', 'Rachid soiba', 300, 500);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(300) NOT NULL,
  `cv` varchar(300) NOT NULL,
  `appartient` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `photo`, `cv`, `appartient`) VALUES
(1, 'https://blogs.lexpress.fr/pantheon-foot/files/2012/07/didier_deschamps_reference.jpg', '', 'makossosteave27@gmail.com'),
(3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLBwLqasS-C0aiHh8uhgBwghW3YY6RW4NHBA', '', 'soibarachid@gmail.com'),
(4, 'https://blogs.lexpress.fr/pantheon-foot/files/2012/07/didier_deschamps_reference.jpg', '', 'steave.MAKOSSO@imie-paris.fr');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `idUser` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  KEY `idUser` (`idUser`),
  KEY `idFormation` (`idFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `inscription1`
--

DROP TABLE IF EXISTS `inscription1`;
CREATE TABLE IF NOT EXISTS `inscription1` (
  `idUser` int(11) NOT NULL,
  `idProjet` int(11) NOT NULL,
  KEY `idUser` (`idUser`),
  KEY `idProjet` (`idProjet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

DROP TABLE IF EXISTS `posseder`;
CREATE TABLE IF NOT EXISTS `posseder` (
  `idUser` int(11) NOT NULL,
  `idDomaineIntervention` int(11) NOT NULL,
  KEY `idUser` (`idUser`),
  KEY `idDomaineIntervention` (`idDomaineIntervention`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `nomHeure` int(11) NOT NULL,
  `technoMaitriser` varchar(100) NOT NULL,
  `creerPar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rediger`
--

DROP TABLE IF EXISTS `rediger`;
CREATE TABLE IF NOT EXISTS `rediger` (
  `idUser` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  KEY `idUser` (`idUser`),
  KEY `idFormation` (`idFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleRoles` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `libelleRoles`, `email`) VALUES
(11, 'Formateur', 'makossosteave27@gmail.com'),
(12, 'Stagiaire', 'steave.MAKOSSO@imie-paris.fr'),
(13, 'Formateur', 'soibarachid@gmail.com'),
(14, 'Formateur', 'soibarachid@gmail.com'),
(15, 'Formateur', 'soibarachid@gmail.com'),
(16, 'Formateur', 'soibarachid@gmail.com'),
(17, 'Formateur', 'wordpress65@gmail.com'),
(18, 'Formateur', 'trolleur12@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `code` int(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(50) NOT NULL,
  `Role` varchar(40) NOT NULL,
  `idConnexion` int(11) DEFAULT NULL,
  `idImage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idConnexion` (`idConnexion`),
  KEY `idImage` (`idImage`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `tel`, `code`, `email`, `password`, `isEmailConfirmed`, `token`, `Role`, `idConnexion`, `idImage`) VALUES
(1, 'msss', 'ma', '06504100', NULL, 'steave1@live.fr', 'ms', 0, 'yj?pmùa', 'Stagiaire', NULL, NULL),
(28, 'makosso', 'steave', '0522263966', NULL, 'makossosteave27@gmail.com', '$2y$10$kAMicoP1vhS4sON.qJ45k.f0nCfeUKWEh9wSxpvtYJJeyboADUpAe', 1, ' ', 'Formateur', NULL, NULL),
(29, 'Deschamps', 'didier', '0750203694', NULL, 'steave.MAKOSSO@imie-paris.fr', '$2y$10$eVJf/jRaNwLdCcjsNvv/iO6tCU3/BSvMYuaiq2ZqFJPB39Mf5StX6', 1, ' ', 'Stagiaire', NULL, NULL),
(33, 'Rachid', 'soiba', '0652159856', NULL, 'soibarachid@gmail.com', '$2y$10$gbEhSqB01omRSLLmj5uTeeIm8pMYWJRsdmt9O2BzX3exgfcHshlSy', 1, '', 'Formateur', NULL, NULL),
(36, 'testeur', 'tester', '0650424850', NULL, 'trolleur12@gmail.com', '$2y$10$uK2Du3Cq6QmqtLTwVkXhSe9VPsQn0oSoGkhzrUQlp.Zdn10pHslzm', 0, 'bqtdePOwV9', 'Formateur', NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assurer`
--
ALTER TABLE `assurer`
  ADD CONSTRAINT `assurer_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assurer_ibfk_2` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inscription1`
--
ALTER TABLE `inscription1`
  ADD CONSTRAINT `inscription1_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscription1_ibfk_2` FOREIGN KEY (`idProjet`) REFERENCES `projet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `posseder_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posseder_ibfk_2` FOREIGN KEY (`idDomaineIntervention`) REFERENCES `domaineintervention` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rediger`
--
ALTER TABLE `rediger`
  ADD CONSTRAINT `rediger_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rediger_ibfk_2` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idConnexion`) REFERENCES `connexion` (`id`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`idImage`) REFERENCES `image` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
