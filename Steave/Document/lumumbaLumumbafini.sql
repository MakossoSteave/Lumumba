-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 sep. 2020 à 12:17
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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `libelle`, `libelleLong`, `img`, `creerPar`, `nomHeureFormation`, `prixFormation`) VALUES
(21, 'Ecole', 'Informatique', 'https://ichef.bbci.co.uk/news/410/cpsprodpb/13FF4/production/_113780918_capture.jpg', 'Rachid soiba', 500, 9000),
(23, 'Vendeur', 'Vendeur', 'https://prospecvente.com/wp-content/uploads/2011/03/bon-vendeur.jpg', 'makosso steave', 40, 800),
(30, 'Boulanger', 'Vendeur de pain exceptionnel', 'https://www.conflans-sainte-honorine.fr/wp-content/uploads/2017/07/Boulangerie-illustration-800x435.jpg', 'makosso steave', 20, 600),
(36, 'designer', 'Apprendre le design', 'https://www.letudiant.fr/static/uploads/mediatheque/ETU_ETU/8/9/2211989-adobestock-154439873-866x495.jpeg', 'Rachid soiba', 300, 500),
(38, 'Bananier', 'Fabrique de Banane jaune', 'https://img-3.journaldesfemmes.fr/n85bAULtAzJF1LR12le4hL83KOs=/910x607/smart/119301ef3867425f942297c2c59b5b74/ccmcms-jdf/11298579.jpg', 'Rachid soiba', 15, 1500),
(41, 'Coiffeur', 'Apprendre a traité les cheveux', 'https://fac.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2019.2F07.2F02.2F3015ac47-f5bf-4ff2-9022-34c41be646c0.2Ejpeg/850x478/quality/90/crop-from/center/chez-le-coiffeur-quels-sont-nos-droits.jpeg', 'makosso steave', 25, 3000);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `photo`, `cv`, `appartient`) VALUES
(1, 'img/WIN_20190411_12_16_19_Pro.jpg', '', 'makossosteave27@gmail.com'),
(3, 'img/AngularJJ.png', '', 'soibarachid@gmail.com'),
(4, 'img/WIN_20190411_12_16_19_Pro.jpg', '', 'steave.MAKOSSO@imie-paris.fr'),
(5, 'https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_960_720.png', '', 'terence5@gmail.com'),
(6, 'img/90f13c48-c51f-11ea-bf3c-b279d2cfb1f8_web__scale_0.2262321_0.2262321.jpg', '', 'jhonny1@gmail.com'),
(7, 'https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_960_720.png', '', 'steave1@live.fr'),
(8, 'img/AngularJJ.png', '', 'jhonsny1@gmail.com'),
(9, 'img/AngularJJ.png', '', 'jhonsny1@gmail.com'),
(10, 'img/AngularJJ.png', '', 'jhonsny1@gmail.com'),
(11, 'img/AngularJJ.png', '', 'jhonsny1@gmail.com'),
(12, 'img/AngularJJ.png', '', 'jhonsny1@gmail.com'),
(13, 'img/AngularJJ.png', '', 'steave1@live.fr');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(255) COLLATE utf8_bin NOT NULL,
  `LibelleLong` varchar(255) COLLATE utf8_bin NOT NULL,
  `techno` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `heure` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix` int(11) NOT NULL,
  `Appartient` varchar(255) COLLATE utf8_bin NOT NULL,
  `proprio` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `Libelle`, `LibelleLong`, `techno`, `heure`, `img`, `prix`, `Appartient`, `proprio`, `type`) VALUES
(20, 'Coiffeur', 'formation de coiffure', NULL, 30, 'https://valessio-coiffeur-paris.fr/wp-content/uploads/2018/12/coiffeur-droits-légal.jpg', 507, 'steave.MAKOSSO@imie-paris.fr', 'makossosteave27@gmail.com', 1),
(24, 'Logistik', 'Creation d\'un système de reconnaissance faciale ', 'PYTHON', 900, 'https://cdn.radiofrance.fr/s3/cruiser-production/2016/12/79c7aebb-4e7c-405d-9705-d702c13a755a/838_gettyimages-660582997.jpg', 2000, 'steave.MAKOSSO@imie-paris.fr', 'jhonny1@gmail.com', 2);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `nomHeure` int(11) NOT NULL,
  `technoMaitriser` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `creerPar` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `description`, `nomHeure`, `technoMaitriser`, `prix`, `creerPar`, `img`) VALUES
(2, 'Developpeur', 'Donner des cours de HTML', 345, 'HTML', 3000, 'Deep Jhonny', 'https://www.grafikart.fr/uploads/posts/1/508.jpg'),
(4, 'Aide au pauvre', 'nous fesont une campagne pour aidé les gens dans le besoin', 200, 'Coeur sur la main', 0, 'Deep Jhonny', 'https://www.chanteursdesainteustache.fr/wp-content/uploads/sites/196/2018/11/pauvrete.jpg'),
(5, 'Renovation', 'rénové une Eglise du quartier de longuebeach', 500, 'BTP', 1350, 'Deep Jhonny', 'https://france3-regions.francetvinfo.fr/image/wjtDyVacDSTsBx26KzLtsw3Coto/930x620/regions/2020/07/06/5f02f40909931_img_20200706_104940-4915958.jpg'),
(6, 'Logistik', 'Creation d\'un système de reconnaissance faciale ', 900, 'PYTHON', 2000, 'Deep Jhonny', 'https://cdn.radiofrance.fr/s3/cruiser-production/2016/12/79c7aebb-4e7c-405d-9705-d702c13a755a/838_gettyimages-660582997.jpg'),
(7, 'musique', 'clip de raps', 5000, 'SON/LYRIC', 3000, 'Deep Jhonny', 'https://www.presse-citron.net/wordpress_prod/wp-content/uploads/2019/03/myspace-musique.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

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
(18, 'Formateur', 'trolleur12@gmail.com'),
(19, 'Stagiaire', 'terence5@gmail.com'),
(20, 'Intervenant', 'jhonny1@gmail.com'),
(21, 'Stagiaire', 'steave1@live.fr'),
(22, 'Stagiaire', 'jhonsny1@gmail.com'),
(23, 'Stagiaire', 'jhonsny1@gmail.com'),
(24, 'Stagiaire', 'jhonsny1@gmail.com'),
(25, 'Stagiaire', 'jhonsny1@gmail.com'),
(26, 'Stagiaire', 'jhonsny1@gmail.com'),
(27, 'Stagiaire', 'steave1@live.fr');

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `tel`, `code`, `email`, `password`, `isEmailConfirmed`, `token`, `Role`, `idConnexion`, `idImage`) VALUES
(28, 'makosso', 'steave', '0646460510', NULL, 'makossosteave27@gmail.com', '$2y$10$kAMicoP1vhS4sON.qJ45k.f0nCfeUKWEh9wSxpvtYJJeyboADUpAe', 1, ' ', 'Formateur', NULL, NULL),
(29, 'Deschamps', 'didier', '0646460513', NULL, 'steave.MAKOSSO@imie-paris.fr', '$2y$10$eVJf/jRaNwLdCcjsNvv/iO6tCU3/BSvMYuaiq2ZqFJPB39Mf5StX6', 1, ' ', 'Stagiaire', NULL, NULL),
(33, 'Rachid', 'soiba', '0652159856', NULL, 'soibarachid@gmail.com', '$2y$10$gbEhSqB01omRSLLmj5uTeeIm8pMYWJRsdmt9O2BzX3exgfcHshlSy', 1, '', 'Formateur', NULL, NULL),
(36, 'testeur', 'tester', '0650424850', NULL, 'trolleur12@gmail.com', '$2y$10$uK2Du3Cq6QmqtLTwVkXhSe9VPsQn0oSoGkhzrUQlp.Zdn10pHslzm', 0, 'bqtdePOwV9', 'Formateur', NULL, NULL),
(37, 'terence', 'tere', '065231220', NULL, 'terence5@gmail.com', '$2y$10$bfaNK/BCpDOtIuipjrHjNe13hfAdjhNdJoGR2plzRZDEoJ0U.54jq', 1, '', 'Admin', NULL, NULL),
(38, 'Deep', 'Jhonny', '0652231649', NULL, 'jhonny1@gmail.com', '$2y$10$pkCF/by9gGjj2kYuGhnDke3Mmzav0FpBE.2yjFW6Azgx0UEzOq9nS', 1, '', 'Intervenant', NULL, NULL),
(45, 'as', 'azs', '06523312320', NULL, 'steave1@live.fr', '$2y$10$Spby284ppzVuuDcc1jhEHeQ.miaHhpNMvLbPC1GlgSTFQaYU6pg2.', 0, 'oTshEWpLlj', 'Stagiaire', NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

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
