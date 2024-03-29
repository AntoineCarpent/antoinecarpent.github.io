-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 29 mars 2024 à 07:58
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_gmae`
--

-- --------------------------------------------------------

--
-- Structure de la table `formules`
--

DROP TABLE IF EXISTS `formules`;
CREATE TABLE IF NOT EXISTS `formules` (
  `id_formule` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_formule`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `formules`
--

INSERT INTO `formules` (`id_formule`, `name`) VALUES
(1, 'avec formule'),
(2, 'sans formule');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_role`, `name`) VALUES
(1, 'Admin'),
(2, 'Clients'),
(3, 'User');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id_theme` int NOT NULL AUTO_INCREMENT,
  `themeName` varchar(255) NOT NULL,
  PRIMARY KEY (`id_theme`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id_theme`, `themeName`) VALUES
(1, 'mer'),
(2, 'campagne'),
(3, 'montagne');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `id_role` int NOT NULL,
  `userName` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_admin`, `id_role`, `userName`, `password`) VALUES
(1, 1, 'admin1', 'test63'),
(2, 2, 'antoine', 'test2'),
(3, 1, 'admin2', 'test3');

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

DROP TABLE IF EXISTS `voyages`;
CREATE TABLE IF NOT EXISTS `voyages` (
  `id_voyage` int NOT NULL AUTO_INCREMENT,
  `id_theme` int NOT NULL,
  `id_formule` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `title_loge` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description_loge` varchar(255) NOT NULL,
  `service` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `idea` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  PRIMARY KEY (`id_voyage`),
  KEY `image-url` (`image_url`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `voyages`
--

INSERT INTO `voyages` (`id_voyage`, `id_theme`, `id_formule`, `title`, `short_description`, `name`, `price`, `place`, `title_loge`, `image_url`, `description_loge`, `service`, `idea`, `start`, `end`) VALUES
(57, 1, 1, 'L\'AUVERGNE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac ex mauris. Duis efficitur augue nec consequat scelerisque. Nulla fermentum lacinia mauris, a viverra leo consectetur at. Ut porttitor aliquam libero nec tempor. Maecenas elementum accumsan ', 'Résidence Domaine des Mauriers 35 Saint-Malo', 200, '16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac ex mauris.', 'adrien-brun-KJn1jE9yfyw-unsplash.jpg', '               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac ex mauris. Duis efficitur augue nec consequat scelerisque. Nulla fermentum lacinia mauris, a viverra leo consectetur at. Ut porttitor aliquam libero nec tempor. Maecenas elem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac ex mauris. Duis efficitur augue nec consequat scelerisque. Nulla fermentum lacinia mauris, a viverra leo consectetur at. Ut porttitor aliquam libero nec tempor. Maecenas elementum accumsan ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac ex mauris. Duis efficitur augue nec consequat scelerisque. Nulla fermentum lacinia mauris, a viverra leo consectetur at. Ut porttitor aliquam libero nec tempor. Maecenas elementum accumsan ', '2024-03-05', '2024-03-21'),
(67, 3, 2, 'L\'AUVERGNE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies sed eros non tristique. In eget ultrices turpis. Nullam ultrices enim eget nulla accumsan molestie. Vestibulum ut vulputate nulla, nec rhoncus arcu. Ut imperdiet aliquet aliquet. S', 'Résidence Tourmalet 65 La Mongie', 7800, '08', 'Votre résidence', 'puy-dome-JQvrJtqI4Yg-unsplash.jpg', '  \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies sed eros non tristique. In eget ultrices turpis. Nullam ultrices enim eget nulla accumsan molestie. Vestibulum ut vulputate nulla, nec rhoncus arcu. Ut imperdiet aliquet aliquet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies sed eros non tristique. In eget ultrices turpis. Nullam ultrices enim eget nulla accumsan molestie. Vestibulum ut vulputate nulla, nec rhoncus arcu. Ut imperdiet aliquet aliquet. S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies sed eros non tristique. In eget ultrices turpis. Nullam ultrices enim eget nulla accumsan molestie. Vestibulum ut vulputate nulla, nec rhoncus arcu. Ut imperdiet aliquet aliquet. S', '2024-03-04', '2024-03-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
