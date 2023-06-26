-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 27 déc. 2020 à 20:16
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets_blog`
--

DROP TABLE IF EXISTS `billets_blog`;
CREATE TABLE IF NOT EXISTS `billets_blog` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(120) NOT NULL,
  `contenu` text NOT NULL,
  `annonce` tinytext NOT NULL,
  `date_billet` datetime NOT NULL,
  `categorie` varchar(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billets_blog`
--

INSERT INTO `billets_blog` (`ID`, `titre`, `contenu`, `annonce`, `date_billet`, `categorie`) VALUES
(1, 'first blog', 'the next one is better', 'this is more than other', '2020-12-13 00:00:00', 'Blague'),
(2, 'Rire', 'Je suis complÃ¨tement dispo', 'Je suis complÃ¨tement dispo', '2020-12-27 20:59:11', 'Discours'),
(3, 'Rire', 'Je suis complÃ¨tement dispo', 'Je suis complÃ¨tement dispo', '2020-12-27 21:04:11', 'Discours'),
(4, 'Test', 'Chaque larmes est nÃ©cessaires', 'Chaque larmes est nÃ©cessaires', '2020-12-27 21:10:15', 'Discours');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_blog`
--

DROP TABLE IF EXISTS `commentaires_blog`;
CREATE TABLE IF NOT EXISTS `commentaires_blog` (
  `ID_comment` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` timestamp NULL DEFAULT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID_comment`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires_blog`
--

INSERT INTO `commentaires_blog` (`ID_comment`, `nom`, `comment`, `date_comment`, `ID`) VALUES
(1, 'Uzumaki', 'Je suis content', '2020-12-12 23:00:00', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires_blog`
--
ALTER TABLE `commentaires_blog`
  ADD CONSTRAINT `commentaires_blog_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `billets_blog` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
