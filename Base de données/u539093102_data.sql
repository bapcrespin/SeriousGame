
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 10 Mars 2016 à 17:16
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `Qcm`
--

INSERT INTO `Qcm` (`idQcm`, `niveau`, `temps`, `valider`, `nom`, `url`) VALUES
(1, 1, 5, 0, 'Comprendre la socialisation : une introduction aux S.E.S', 'https://www.youtube.com/watch?v=1D5vh6xQIQE'),
(2, 1, 5, 0, 'Analyser un phénomène social : le cas de l’obésité', 'https://www.youtube.com/watch?v=aeqWS9Yc6fQ'),
(3, 1, 5, 0, 'La consommation, un fait social : l’exemple des chaussures de sport', 'https://www.youtube.com/watch?v=zea3o2sZe5o'),
(4, 1, 5, 0, 'Exploiter des graphiques en S.E.S : le cas des sports d’hiver', 'https://www.youtube.com/watch?v=7GmGddyt0Mk'),
(5, 1, 5, 0, 'Les organisations productives', 'https://www.youtube.com/watch?v=ap0QBeuXHNA&feature=youtu.be'),
(6, 1, 5, 0, 'Qu’est-ce que la valeur ajoutée ? Comment la calculer ?', 'https://www.youtube.com/watch?v=p6bZ4IHhWCw'),
(7, 1, 5, 0, 'Proportions et pourcentages : le cas du marché automobile', 'https://www.youtube.com/watch?v=m5HlWKlWanU'),
(8, 1, 5, 0, 'Mesurer une évolution : le cas du marché des tablettes', 'https://www.youtube.com/watch?v=91vUPk8H11o'),
(9, 1, 5, 0, 'Lire un tableau statistique en S.E.S : le cas de la pollution', 'https://www.youtube.com/watch?v=ar_dHO4Krr0'),
(10, 1, 5, 0, 'Les externalités : négatives et positives', 'https://www.youtube.com/watch?v=vG6R66qas5Y'),
(11, 1, 5, 0, 'Comment mesurer le chômage ?', 'https://www.youtube.com/watch?v=ZV5BTZr7yVE'),
(12, 1, 5, 0, 'Le diplôme protège-t-il du chômage ?', 'https://www.youtube.com/watch?v=Y-nyCdK8d7A'),
(13, 1, 5, 0, 'L’emploi des jeunes', 'https://www.youtube.com/watch?v=qWcSDaskpMA');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

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
(11, 2, 'Parmi les causes de l’obésité, laquelle des propositions suivantes est-elle fausse ?', 0, 0),
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
(28, 5, 'Quelle est la proposition fausse parmi les suivantes, le financement des associations provient', 0, 0),
(29, 5, 'Parmi les propositions suivantes, laquelle n''est pas une entreprise', 0, 0),
(30, 5, 'En 2015, depuis leur création en 1985, les Restos du coeur avaient servi plus', 0, 0),
(31, 6, 'Si une entreprise a un chiffre d''affaires de 450.000 euros, un profit de 150.000 euros, des matières premières  100.000 euros, des dépenses totales de 300.000 euros, de coût salarial de 50.000 euros, quelle est sa valeur ajoutée ?', 0, 1),
(32, 6, 'La formule de la valeur ajoutée est', 0, 0),
(33, 6, 'Quelle est la proposition n’appartenant pas aux consommations intermédiaires ?', 0, 0),
(34, 6, 'La somme des valeurs ajoutées situées sur un territoire permet d’obtenir', 0, 0),
(35, 6, 'Les consommations intermédiaires ont une durée de vie', 0, 0),
(36, 6, 'Le chiffre d’affaires représente', 0, 0),
(37, 7, 'Selon vous, est-il possible qu''une augmentation soit supérieure à 100% ?', 0, 1),
(38, 7, 'Une proportion est équivalente à un pourcentage mais présentée autrement', 0, 0),
(39, 7, '75 % correspond', 0, 0),
(40, 7, 'La moitié des ménages étaient équipés d’une voiture d’occasion en 1970 selon l’INSEE', 0, 0),
(41, 7, 'Quel constructeur était le premier vendeur d’automobiles en Chine en 2012', 0, 0),
(42, 7, 'La chine représentait 23.63 % du marché automobile mondial en 2013, soit', 0, 0),
(43, 8, 'Si une personne a vu son revenu doubler, on peut dire que', 0, 1),
(44, 8, 'Parmi les causes suivantes d’achat de tablettes numériques, laquelle n’est pas économique', 0, 0),
(45, 8, 'La formule de l’écart absolu est', 0, 0),
(46, 8, 'Parmi ces indicateurs d’évolution, lequel n’a pas d’unité', 0, 0),
(47, 8, 'Entre 2010 et 2013 Le nombre de tablettes vendues dans le monde a augmenté de', 0, 0),
(48, 9, 'Selon vous, comment s''est appelé le sommet sur le climat tenu à Paris à la fin de l''année', 0, 1),
(49, 9, 'Quel mode de transport est-il le plus polluant', 0, 0),
(50, 9, 'Quel mode de transport a permis une baisse d’émission de CO2', 0, 0),
(51, 9, 'Un tableau statistique comprend au moins', 0, 0),
(52, 9, 'L’unité est toujours indiquée dans un tableau statistique', 0, 0),
(53, 9, 'Faut-il indiquer la source du tableau statistique quand on l’utilise', 0, 0),
(54, 10, 'Selon vous, si une entreprise s''installe dans une zone rurale', 0, 1),
(55, 10, 'Les externalités sont', 0, 0),
(56, 10, 'Les externalités sont', 0, 0),
(57, 10, 'Laquelle des propositions suivantes n’est pas une externalité positive', 0, 0),
(58, 10, 'Les situations où un acteur est défavorisé par l’action d’un tiers sans qu’il en soit compensé sont', 0, 0),
(59, 10, 'Les émissions de CO2 par habitant ont diminué entre 1990 et 2009', 0, 0),
(60, 11, 'Selon vous, la population active est égale à', 0, 1),
(61, 11, 'Un chômeur fait partie', 0, 0),
(62, 11, 'L’INSEE ne mesure pas le chômage', 0, 0),
(63, 11, 'La formule du taux de chômage est la suivante', 0, 0),
(64, 11, 'A la fin 2014, l’effectif de chômeurs (catégorie A) était de', 0, 0),
(65, 11, 'Entre 2008 et 2014 en France, le chômage', 0, 0),
(66, 12, 'Selon vos recherches le LMD est', 0, 1),
(67, 12, 'Entre 1982 et 2012 le taux de chômage des actifs sans diplôme', 0, 0),
(68, 12, 'Quelle catégorie a-t-elle vu son taux de chômage augmenter le plus vite entre 2008 et 2011 ?', 0, 0),
(69, 12, 'Le diplôme protège complètement du chômage', 0, 0),
(70, 12, 'Parmi les propositions suivantes, la quelle est-elle fausse ? Les personnes les plus diplômées gardent un avantage en', 0, 0),
(71, 12, 'En 2013, près de la moitié des personnes sorties depuis 1 à 4 ans du système scolaire étaient au chômage', 0, 0),
(72, 13, 'Le taux d''emploi est-il équivalent au taux de chômage ?', 0, 1),
(73, 13, 'L’INSEE considère comme « jeunes » les', 0, 0),
(74, 13, 'Le taux d’emploi est la proportion de personnes', 0, 0),
(75, 13, 'Quel type de contrat n’est pas précaire parmi les choix suivants', 0, 0),
(76, 13, 'La part de l’emploi précaire a le plus augmenté entre 1980 et 2014 parmi les', 0, 0),
(77, 13, 'Un emploi précaire est considéré comme', 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=284 ;

--
-- Contenu de la table `Reponses`
--

INSERT INTO `Reponses` (`idReponse`, `idQuestion`, `reponse`, `correct`) VALUES
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
(120, 31, '200.000 euros', 0),
(121, 32, 'Chiffre d’affaires – Coûts de production', 0),
(122, 32, 'Recettes – Dépenses', 0),
(123, 32, 'Valeur de la production – Consommations intermédiaires', 1),
(124, 33, 'Matières premières', 0),
(125, 33, 'Outils', 1),
(126, 33, 'Electricité', 0),
(127, 33, 'Fournitures de bureau', 0),
(128, 34, 'Le PNB', 0),
(129, 34, 'Le PIB', 1),
(130, 34, 'L'' IDH', 0),
(131, 35, 'D''un an', 0),
(132, 35, 'De moins d''un an', 1),
(133, 35, 'De plus d''un an', 0),
(134, 35, 'Eternelle', 0),
(135, 36, 'Le total des ventes de biens et services facturées sur un exercice', 1),
(136, 36, 'Le total des bénéfices réalisés sur une année', 0),
(137, 36, 'Le total des dépenses réalisées sur une année', 0),
(138, 37, 'Oui', 0),
(139, 37, 'Non', 0),
(140, 37, 'Ca dépend', 0),
(141, 38, 'Vrai', 0),
(142, 38, 'Faux', 0),
(143, 38, 'Ni l''un ni l''autre', 0),
(144, 39, 'A la moitié', 0),
(145, 39, 'Au tiers', 0),
(146, 39, 'Aux deux tiers', 0),
(147, 39, 'Aux trois quarts', 1),
(148, 40, 'Vrai', 0),
(149, 40, 'Faux', 0),
(150, 40, 'Ni l''un ni l''autre', 0),
(151, 41, 'Peugeot', 0),
(152, 41, 'Volkswagen', 0),
(153, 41, 'General Motors', 1),
(154, 41, 'Toyota', 0),
(155, 42, 'Un peu moins d’un quart', 1),
(156, 42, 'Un peu plus d’un dixième', 0),
(157, 42, 'Environ un cinquième', 0),
(158, 42, 'Presque un tiers', 0),
(159, 43, 'l''écart absolu est de 2', 0),
(160, 43, 'le taux de variation est de 2', 0),
(161, 43, 'Le coefficient multiplicateur est de 2', 1),
(162, 43, 'L''évolution est de 2', 0),
(163, 44, 'Utilité', 0),
(164, 44, 'Distinction', 1),
(165, 44, 'Prix accessible', 0),
(166, 44, 'Produit nouveau', 0),
(167, 45, '(Valeur d’arrivée – valeur de départ) / Valeur de départ', 1),
(168, 45, '(Valeur d’arrivée – valeur de départ) / Valeur d’arrivée', 0),
(169, 45, 'Valeur d’arrivée – Valeur de départ', 0),
(170, 45, 'Valeur d’arrivée / Valeur de départ', 0),
(171, 46, 'L’écart absolu', 0),
(172, 46, 'Le coefficient multiplicateur', 1),
(173, 46, 'Le taux de variation', 0),
(174, 46, 'Aucune des réponses précédentes', 0),
(175, 47, '48 %', 0),
(176, 47, '148 %', 1),
(177, 47, '948 %', 0),
(178, 47, 'Aucune des réponses précédentes', 0),
(179, 48, 'Paris climat', 0),
(180, 48, 'Sommet 2015', 0),
(181, 48, 'COP 21', 1),
(182, 48, 'CO2 Paris', 0),
(183, 48, '2015 Climat', 0),
(184, 49, 'Le métro', 0),
(185, 49, 'Le tramway', 0),
(186, 49, 'Le bus', 0),
(187, 49, 'La voiture particulière', 1),
(188, 50, 'L’aérien', 0),
(189, 50, 'Le ferroviaire', 1),
(190, 50, 'Le maritime', 0),
(191, 50, 'Le routier', 0),
(192, 51, 'Plusieurs lignes', 0),
(193, 51, 'Plusieurs colonnes', 0),
(194, 51, 'Plusieurs colonnes et plusieurs lignes', 0),
(195, 51, 'Une ligne avec plusieurs colonnes ou une colonne avec plusieurs lignes', 1),
(196, 52, 'Vrai', 0),
(197, 52, 'Faux', 0),
(198, 52, 'Ni l''un ni l''autre', 0),
(199, 53, 'Oui', 0),
(200, 53, 'Non', 0),
(201, 53, 'Ni l''un ni l''autre', 0),
(202, 54, 'Elle entraîne des externalités positives', 1),
(203, 54, 'Elle entraîne des externalités négatives', 0),
(204, 54, 'Elle entraîne des externalités neutres', 0),
(205, 54, 'Elle n''entraîne aucune externalité', 0),
(206, 55, 'Le fait que l’activité de production d’un agent affecte le bien-être d’un autre sans qu’aucun des deux ne reçoive ou paye  une compensation', 0),
(207, 55, 'Le fait que l’activité de consommation d’un agent affecte le bien-être d’un autre sans qu’aucun des deux ne reçoive ou  paye une compensation', 0),
(208, 55, 'Le fait que l’activité de production ou de consommation d’un agent affecte le bien-être d’un autre sans qu’aucun des  deux ne reçoive ou paye une compensation', 1),
(209, 55, 'Une imperfection du marché', 0),
(210, 55, 'Une défaillance du marché', 1),
(211, 55, 'Une hypothèse du marché', 0),
(212, 57, 'Transport en commun', 0),
(213, 57, 'Transport en voiture', 1),
(214, 57, 'Transport en train', 0),
(215, 58, 'Des externalités négatives', 1),
(216, 58, 'Des externalités positives', 0),
(217, 58, 'Des externalités neutres', 0),
(218, 59, 'En Chine', 0),
(219, 59, 'En Europe', 1),
(220, 59, 'En Inde', 0),
(221, 60, 'La population inactive – La population totale', 0),
(222, 60, 'La population totale / La population inactive', 0),
(223, 60, 'La population totale - La population inactive', 1),
(224, 60, 'La population active occupée – La population totale', 0),
(225, 60, 'La population active occupée / La population totale', 0),
(226, 61, 'De la population inactive', 0),
(227, 61, 'De la population active', 1),
(228, 61, 'De la population active occupée', 0),
(229, 62, 'Chaque mois', 1),
(230, 62, 'Chaque trimestre', 0),
(231, 62, 'Par enquête téléphonique', 0),
(232, 63, 'Population active / Nombre de demandeurs d’emploi (en %)', 0),
(233, 63, 'Nombre de demandeurs d’emploi / Population active (en %)', 1),
(234, 63, 'Population active / Nombre de chômeurs (en %)', 0),
(235, 64, '1.5 millions', 0),
(236, 64, '3.5 millions', 1),
(237, 64, '5.5 millions', 0),
(238, 64, '7.5 millions', 0),
(239, 65, 'A augmenté', 1),
(240, 65, 'Est resté stable', 0),
(241, 65, 'A baissé', 0),
(242, 65, 'A été supprimé', 0),
(243, 66, 'Le malade diplômé', 0),
(244, 66, 'La mesure du chômage', 0),
(245, 66, 'Licence master doctorat', 1),
(246, 66, 'Littérature en maîtrise diplômée', 0),
(247, 67, 'A légèrement augmenté', 0),
(248, 67, 'A globalement baissé', 0),
(249, 67, 'Est resté globalement stable', 0),
(250, 67, 'A fortement augmenté', 1),
(251, 68, 'Les ouvriers', 1),
(252, 68, 'Les cadres', 0),
(253, 68, 'Les professions intermédiaires', 0),
(254, 68, 'Les artisans, commerçants et chefs d’entreprise', 0),
(255, 69, 'Vrai', 0),
(256, 69, 'Faux', 0),
(257, 70, 'D’accès à l’emploi', 0),
(258, 70, 'De qualité de l’emploi', 0),
(259, 70, 'D’accès au chômage', 1),
(260, 70, 'De salaire', 0),
(261, 71, 'Vrai', 0),
(262, 71, 'Faux', 0),
(263, 72, 'Oui', 0),
(264, 72, 'Non', 0),
(265, 72, 'Ca dépend', 0),
(266, 73, 'De 12 à 18 ans', 0),
(267, 73, 'De 15 à 21 ans', 0),
(268, 73, 'De 18 à 24 ans', 0),
(269, 73, 'De 16 à 24 ans', 1),
(270, 74, 'Disposant d’un emploi parmi la population active', 0),
(271, 74, 'Disposant d’un emploi parmi la population totale', 0),
(272, 74, 'Disposant d’un emploi parmi la population en âge de travailler', 1),
(273, 75, 'CDI', 1),
(274, 75, 'CDD', 0),
(275, 75, 'Intérim', 0),
(276, 75, 'Apprentissage', 0),
(277, 76, '10 à 14 ans', 0),
(278, 76, '15 à 24 ans', 1),
(279, 76, '25 à 49 ans', 0),
(280, 76, '50 et plus', 0),
(281, 77, 'Stable', 0),
(282, 77, 'Instable', 1),
(283, 77, 'Ni l''un ni l''autre', 0);

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
