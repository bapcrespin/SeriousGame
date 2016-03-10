
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 10 Mars 2016 à 15:25
-- Version du serveur: 10.0.20-MariaDB
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `u539093102_data`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `Qcm`
--

INSERT INTO `Qcm` (`idQcm`, `niveau`, `temps`, `valider`, `nom`, `url`) VALUES
(1, 1, 5, 0, 'Comprendre la socialisation : une introduction aux S.E.S', 'https://www.youtube.com/watch?v=1D5vh6xQIQE'),
(2, 1, 5, 0, 'Analyser un phénomène social : le cas de l’obésité', 'https://www.youtube.com/watch?v=aeqWS9Yc6fQ'),
(3, 1, 5, 0, 'La consommation, un fait social : l’exemple des chaussures de sport', 'https://www.youtube.com/watch?v=zea3o2sZe5o'),
(4, 1, 5, 0, 'Exploiter des graphiques en S.E.S : le cas des sports d’hiver', 'https://www.youtube.com/watch?v=7GmGddyt0Mk'),
(5, 1, 5, 0, 'Les organisations productives', 'https://www.youtube.com/watch?v=ap0QBeuXHNA&feature=youtu.be'),
(6, 1, 5, 0, 'Qu’est-ce que la valeur ajoutée ? Comment la calculer ?', 'https://www.youtube.com/watch?v=p6bZ4IHhWCw');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `Questions`
--

INSERT INTO `Questions` (`idQuestion`, `idQcm`, `question`, `conteur`, `bonus`) VALUES
(1, 1, 'Répondez à la question posée en fin de vidéo : Peut-on dire que cet enfant a été socialisé ?', 0, 1),
(2, 1, 'La socialisation est un processus :', 0, 0),
(3, 1, 'Se brosser les dents est :', 0, 0),
(4, 1, 'La socialisation secondaire complète l’apprentissage fait dans les premières années de la vie', 0, 0),
(5, 1, 'Laquelle des propositions suivantes ne fait pas partie des instances de socialisation primaire ?', 0, 0),
(6, 1, 'La socialisation des filles et des garçons est-elle identique ?', 0, 0),
(7, 2, 'Vu dans la vidéo : quel était en 2012, le nombre de français âgés de plus de 18 ans étant en surpoids ?', 0, 1),
(8, 2, 'Le fondateur de la sociologie en France est', 0, 0),
(9, 2, 'La sociologie étudie', 0, 0),
(10, 2, 'L’augmentation très importante de la part de la population obèse en France entre 1997 et 2012 indique que nous sommes en présence d’ un  phénomène social', 0, 0),
(11, 1, 'Parmi les causes de l’obésité, laquelle des propositions suivantes est-elle fausse ?', 0, 0),
(12, 2, 'Parmi les causes de l’obésité, laquelle des propositions suivantes est-elle fausse ?', 0, 0),
(13, 2, 'En 2014 le pays de la planète comptant la plus grande proportion d’enfants obèses était', 0, 0),
(14, 3, 'Parmi les propositions suivantes, laquelle est-elle fausse ? Consommer signifie', 0, 0),
(15, 3, 'L’effet de distinction est aussi un signe d’appartenance à un groupe de référence', 0, 0),
(16, 3, 'Sur le prix de vente d’une paire de chaussure de sport de la marque Nike, Les matières premières représentaient en 2013', 0, 0),
(17, 3, 'La consommation qui permet de caractériser un groupe social est appelé', 0, 0),
(18, 3, 'La consommation dite ostentatoire est destinée', 0, 0),
(19, 4, 'Selon vous, acheter une voiture de marque Ferrari est une consommation', 0, 1),
(20, 4, 'Quel intérêt principal présente un diagramme circulaire', 0, 0),
(21, 4, 'Une semaine aux sports d’hiver constitue-t-elle un marqueur social ?', 0, 0),
(22, 4, 'Qu’est-ce que le taux de départ en vacances ?', 0, 0),
(23, 4, 'Parmi les raisons suivantes de non-départ en vacances, laquelle est-elle fausse', 0, 0),
(24, 4, 'Les catégories aisées optent pour des séjours de vacances', 0, 0),
(25, 5, 'Selon vous, la SNCF est', 0, 1),
(26, 5, 'Les organisations productives sont un', 0, 0),
(27, 5, 'Quelle est la proposition fausse parmi les suivantes, les entreprises', 0, 0),
(28, 5, '3) Quelle est la proposition fausse parmi les suivantes, le financement des associations provient', 0, 0),
(29, 5, 'Parmi les propositions suivantes, laquelle n''est pas une entreprise', 0, 0),
(30, 5, 'En 2015, depuis leur création en 1985, les Restos du coeur avaient servi plus', 0, 0),
(31, 6, 'Si une entreprise a un chiffre d''affaires de 450.000 euros, un profit de 150.000 euros, des matières premières  100.000 euros, des dépenses totales de 300.000 euros, de coût salarial de 50.000 euros, quelle est sa valeur ajoutée', 0, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=121 ;

--
-- Contenu de la table `Reponses`
--

INSERT INTO `Reponses` (`idReponse`, `idQuestion`, `reponse`, `correct`) VALUES
(1, 1, 'Oui', 1),
(2, 1, 'Non', 0),
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
(13, 4, 'Vrai', 1),
(14, 4, 'Faux', 1),
(15, 4, 'Ca depend', 0),
(16, 5, 'Les médias', 0),
(17, 5, 'Les groupes de pairs', 0),
(18, 5, 'Le monde professionnel', 1),
(19, 5, 'L''école', 0),
(20, 5, 'La famille', 0),
(21, 6, 'Oui', 0),
(22, 6, 'Non', 1),
(23, 7, '45.8 millions', 0),
(24, 7, '14.8 millions', 1),
(25, 7, '24.1 %', 0),
(26, 7, '32.3 %', 0),
(27, 7, '03.9 milliers', 0),
(28, 8, 'Karl Marx', 0),
(29, 8, 'Max Weber', 0),
(30, 8, 'Emile Durkheim', 1),
(31, 8, 'Pierre Bourdieu', 0),
(32, 9, 'Les comportements des groupes sociaux et tente d’en étudier les fondements', 0),
(33, 9, 'Les comportements des individus en tant que membres d’un corps social et tente d’en étudier les fondements', 1),
(34, 9, 'Les comportements de la société et tente d’en étudier les fondements', 0),
(35, 10, 'Vrai', 0),
(36, 10, 'Faux', 0),
(37, 10, 'Ca dépend', 0),
(40, 11, 'Alimentation en trop grande quantité', 0),
(41, 11, 'Alimentation trop bien cuisinée', 1),
(42, 11, 'Alimentation non équilibrée', 0),
(43, 11, 'Manque de marche quotidienne', 0),
(44, 11, 'Manque d’activité physique', 0),
(45, 13, 'Les Etats-Unis', 0),
(46, 13, 'La France', 0),
(47, 13, 'Le Mexique', 1),
(48, 13, 'La Chine', 0),
(49, 13, 'L’Inde', 0),
(50, 14, 'Utiliser des biens ou des services', 0),
(51, 14, 'Acheter des biens ou des services', 0),
(52, 14, 'Détruire des biens ou des services', 0),
(53, 14, 'Vendre des biens ou des services', 1),
(54, 15, 'Vrai', 0),
(55, 15, 'Faux', 0),
(56, 15, 'Ca dépend', 0),
(57, 16, '8 % du prix', 1),
(58, 16, '17 % du prix', 0),
(59, 16, '29 % du prix', 0),
(60, 16, '42 % du prix', 0),
(61, 17, 'Produit de luxe', 0),
(62, 17, 'Marqueur social', 1),
(63, 17, 'Effet d’imitation', 0),
(64, 17, 'Effet de distinction', 0),
(65, 18, 'A montrer un statut social, un mode de vie ou une personnalité', 1),
(66, 18, 'A s’habiller correctement pour travailler', 0),
(67, 18, 'A satisfaire des besoins', 0),
(68, 19, 'de masse', 0),
(69, 19, 'de vacances', 0),
(70, 19, 'ostentatoire', 1),
(71, 19, 'de besoin', 0),
(72, 19, 'exceptionnelle', 0),
(73, 20, 'Présenter une répartition', 1),
(74, 20, 'Mesurer une évolution', 0),
(75, 20, 'Etablir une comparaison', 0),
(76, 20, 'Aucune des réponses précédentes', 0),
(77, 21, 'Oui', 0),
(78, 21, 'Non', 0),
(79, 21, 'Ni l''un ni l''autre', 0),
(80, 22, 'Le pourcentage de personnes étant parti en vacances 4 nuits consécutives au cours des 12 derniers mois précédant  l’enquête', 1),
(81, 22, 'Le pourcentage de personnes étant parti en vacances 12 nuits consécutives au cours des 4 derniers mois précédant  l’enquête', 0),
(82, 22, 'Le nombre de personnes étant parti en vacances 4 nuits consécutives au cours des 12 derniers mois précédant  l’enquête', 0),
(83, 22, 'Le nombre de personnes étant parti en vacances 12 nuits consécutives au cours des 4 derniers mois précédant  l’enquête', 0),
(84, 23, 'Financières', 0),
(85, 23, 'Familiales', 0),
(86, 23, 'De chaleur', 1),
(87, 23, 'De santé', 0),
(88, 24, 'Plus longs', 0),
(89, 24, 'Plus courts', 1),
(90, 24, 'Moins chers', 0),
(91, 24, 'Aucune des réponses précédentes', 0),
(92, 25, 'entreprise privée', 0),
(93, 25, 'entreprise publique', 1),
(94, 25, 'administration', 0),
(95, 25, 'association', 0),
(96, 25, 'organisation non productive', 0),
(97, 26, 'Ensemble destiné à fabriquer des produits', 0),
(98, 26, 'Ensemble destiné à fournir des biens ou des services', 1),
(99, 26, 'Ensemble destiné à produire des marchandises', 0),
(100, 26, 'Aucune des réponses précédentes', 0),
(101, 27, 'Produisent des biens ou services', 0),
(102, 27, 'Réalisent un bénéfice', 0),
(103, 27, 'Satisfont des besoins collectifs', 1),
(104, 27, 'Répondent à des besoins solvables', 0),
(105, 28, 'Des impôts', 1),
(106, 28, 'Des dons', 0),
(107, 28, 'Des subventions', 0),
(108, 28, 'Des cotisations', 0),
(109, 29, 'Facebook', 0),
(110, 29, 'L''Éducation nationale', 1),
(111, 29, 'La poste', 0),
(112, 30, 'D''un million de repas', 0),
(113, 30, 'De 10 millions de repas', 0),
(114, 30, 'De 100 millions de repas', 0),
(115, 30, 'D''un milliard de repas', 1),
(116, 31, '300.000 euros', 0),
(117, 31, '150.000 euros', 0),
(118, 31, '350.000 euros', 1),
(119, 31, '250.000 euros', 0),
(120, 31, '200.000 euros', 0);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`mail`, `mdp`, `avatar`, `scoreTotal`) VALUES
('nicolas@coucou.fr', 'coucou', 'images/default.png', 1),
('admin', 'esprod2016', 'images/default.png', 0),
('tristan@cab', 'alfred1', 'images/default.png', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
