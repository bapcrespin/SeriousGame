-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Janvier 2016 à 19:37
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `base21`
--

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

CREATE TABLE IF NOT EXISTS `jouer` (
  `mail` varchar(50) NOT NULL DEFAULT '',
  `idQcm` int(3) NOT NULL DEFAULT '0',
  `nbEssais` int(3) DEFAULT NULL,
  `scoreQcm` int(2) DEFAULT NULL,
  `valider` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`mail`,`idQcm`),
  KEY `idQcm` (`idQcm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `qcm`
--

CREATE TABLE IF NOT EXISTS `qcm` (
  `idQcm` int(3) NOT NULL AUTO_INCREMENT,
  `niveau` int(1) NOT NULL,
  `temps` int(10) DEFAULT NULL,
  `valider` tinyint(1) DEFAULT '0',
  `nom` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idQcm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `qcm`
--

INSERT INTO `qcm` (`idQcm`, `niveau`, `temps`, `valider`, `nom`, `url`) VALUES
(1, 1, 5, 0, 'Comprendre la socialisation : une introduction aux S.E.S', 'https://www.youtube.com/watch?v=1D5vh6xQIQE');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `idQuestion` int(3) NOT NULL AUTO_INCREMENT,
  `idQcm` int(3) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `conteur` int(2) DEFAULT '0',
  `bonus` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idQuestion`),
  KEY `idQcm` (`idQcm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`idQuestion`, `idQcm`, `question`, `conteur`, `bonus`) VALUES
(1, 1, 'Répondez à la question posée en fin de vidéo : Peut-on dire que cet enfant a été socialisé ?', 0, 1),
(2, 1, 'La socialisation est un processus :', 0, 0),
(3, 1, 'Se brosser les dents est :', 0, 0),
(4, 1, 'La socialisation secondaire complète l’apprentissage fait dans les premières années de la vie', 0, 0),
(5, 1, 'Laquelle des propositions suivantes ne fait pas partie des instances de socialisation primaire ?', 0, 0),
(6, 1, 'La socialisation des filles et des garçons est-elle identique ?', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE IF NOT EXISTS `reponses` (
  `idReponse` int(3) NOT NULL AUTO_INCREMENT,
  `idQuestion` int(3) NOT NULL,
  `reponse` varchar(500) DEFAULT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idReponse`),
  KEY `idQuestion` (`idQuestion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `reponses`
--

INSERT INTO `reponses` (`idReponse`, `idQuestion`, `reponse`, `correct`) VALUES
(1, 1, 'Oui', 1),
(2, 1, 'Non', 1),
(3, 1, 'Ca depend', 0),
(4, 2, 'D’extériorisation des normes propres à une société', 0),
(5, 2, 'D’extériorisation des normes et valeurs propres à une société', 0),
(6, 2, 'D’intériorisation des normes et valeurs propres à une société', 1),
(7, 2, 'D’intériorisation des valeurs propres à une société', 0),
(8, 3, 'Une valeur', 0),
(9, 3, 'Une norme', 1),
(10, 3, 'Une norme', 0),
(11, 3, 'Une norme et une valeur', 0),
(12, 3, 'Ni l''un ni l''autre', 0),
(13, 4, 'Vrai', 0),
(14, 4, 'Faux', 1),
(15, 4, 'Ca depend', 0),
(16, 5, 'Les médias', 0),
(17, 5, 'Les groupes de pairs', 0),
(18, 5, 'Le monde professionnel', 1),
(19, 5, 'L''école', 0),
(20, 5, 'La famille', 0),
(21, 6, 'Oui', 0),
(22, 6, 'Non', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `mail` varchar(50) NOT NULL DEFAULT '',
  `mdp` varchar(20) DEFAULT NULL,
  `avatar` varchar(20) DEFAULT NULL,
  `scoreTotal` int(5) DEFAULT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `Jouer_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `utilisateurs` (`mail`),
  ADD CONSTRAINT `Jouer_ibfk_2` FOREIGN KEY (`idQcm`) REFERENCES `qcm` (`idQcm`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `Questions_ibfk_1` FOREIGN KEY (`idQcm`) REFERENCES `qcm` (`idQcm`);

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `Reponses_ibfk_1` FOREIGN KEY (`idQuestion`) REFERENCES `questions` (`idQuestion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
