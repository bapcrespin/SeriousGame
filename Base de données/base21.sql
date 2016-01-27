-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 27 Janvier 2016 à 09:40
-- Version du serveur: 5.5.46
-- Version de PHP: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `base21`
--

-- --------------------------------------------------------

--
-- Structure de la table `Jouer`
--

CREATE TABLE IF NOT EXISTS `Jouer` (
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
-- Structure de la table `Qcm`
--

CREATE TABLE IF NOT EXISTS `Qcm` (
  `idQcm` int(3) NOT NULL AUTO_INCREMENT,
  `niveau` int(1) NOT NULL,
  `temps` int(10) DEFAULT NULL,
  `valider` tinyint(1) DEFAULT '0',
  `nom` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idQcm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Questions`
--

CREATE TABLE IF NOT EXISTS `Questions` (
  `idQuestion` int(3) NOT NULL AUTO_INCREMENT,
  `idQcm` int(3) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `conteur` int(2) DEFAULT '0',
  `bonus` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idQuestion`),
  KEY `idQcm` (`idQcm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Reponses`
--

CREATE TABLE IF NOT EXISTS `Reponses` (
  `idReponse` int(3) NOT NULL AUTO_INCREMENT,
  `idQuestion` int(3) NOT NULL,
  `reponse` varchar(500) DEFAULT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idReponse`),
  KEY `idQuestion` (`idQuestion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE IF NOT EXISTS `Utilisateurs` (
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
-- Contraintes pour la table `Jouer`
--
ALTER TABLE `Jouer`
  ADD CONSTRAINT `Jouer_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `Utilisateurs` (`mail`),
  ADD CONSTRAINT `Jouer_ibfk_2` FOREIGN KEY (`idQcm`) REFERENCES `Qcm` (`idQcm`);

--
-- Contraintes pour la table `Questions`
--
ALTER TABLE `Questions`
  ADD CONSTRAINT `Questions_ibfk_1` FOREIGN KEY (`idQcm`) REFERENCES `Qcm` (`idQcm`);

--
-- Contraintes pour la table `Reponses`
--
ALTER TABLE `Reponses`
  ADD CONSTRAINT `Reponses_ibfk_1` FOREIGN KEY (`idQuestion`) REFERENCES `Questions` (`idQuestion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
