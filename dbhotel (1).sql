-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Ven 22 Mars 2019 à 20:42
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dbhotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `IDADMIN` decimal(8,0) NOT NULL,
  `NOMADMIN` text,
  `PRENOMADMIN` text,
  `EMAILADMIN` text,
  `PASSWORDADMIN` longtext,
  `TELADMIN` decimal(8,0) DEFAULT NULL,
  PRIMARY KEY (`IDADMIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`IDADMIN`, `NOMADMIN`, `PRENOMADMIN`, `EMAILADMIN`, `PASSWORDADMIN`, `TELADMIN`) VALUES
('1', 'el khiyar', 'monsif', 'monsif@gmail.com', '741', '5');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `ID_CATEGORIE` decimal(8,0) NOT NULL,
  `TYPE` text,
  PRIMARY KEY (`ID_CATEGORIE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`ID_CATEGORIE`, `TYPE`) VALUES
('1', 'simple'),
('2', 'double'),
('3', 'triple');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE IF NOT EXISTS `chambre` (
  `N_CHAMBRE` decimal(8,0) NOT NULL,
  `N_HOTEL` decimal(8,0) NOT NULL,
  `ID_CATEGORIE` decimal(8,0) NOT NULL,
  `TEL_CHAMBRE` decimal(8,0) DEFAULT NULL,
  PRIMARY KEY (`N_CHAMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`N_CHAMBRE`, `N_HOTEL`, `ID_CATEGORIE`, `TEL_CHAMBRE`) VALUES
('1', '1', '1', '3'),
('2', '2', '2', '4'),
('3', '1', '2', '2'),
('4', '3', '2', '8'),
('5', '4', '1', '23'),
('6', '1', '1', '25'),
('7', '1', '1', '25');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `NOMCLIENT` text,
  `PRENOMCLIENT` text,
  `ADDRESSCLIENT` text,
  `EMAILCLIENT` text,
  `TELCLIENT` decimal(8,0) DEFAULT NULL,
  `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_CLIENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NOMCLIENT`, `PRENOMCLIENT`, `ADDRESSCLIENT`, `EMAILCLIENT`, `TELCLIENT`, `ID_CLIENT`) VALUES
('elkhiyar', 'said', 'azro', 'said@gmail.com', '28', 1),
('mohemed', 'rachid', 'ait meloul', 'rachid@gmail.com', '123654', 6),
('mohemed', 'rachid', 'ait meloul', 'rachid@gmail.com', '123654', 7),
('hamidi', 'ali', 'dakhla agadir', 'hamid@gmail.com', '123654', 9),
('hamidi', 'ali', 'dakhla agadir', 'hamid@gmail.com', '123654', 10),
('hamidi', 'ali', 'dakhla agadir', 'hamid@gmail.com', '123654', 11),
('hamidi', 'ali', 'dakhla agadir', 'hamid@gmail.com', '123654', 12),
('hamidi', 'ali', 'dakhla agadir', 'hamid@gmail.com', '123654', 13),
('karimi', 'rachid', 'ait meloul', 'karim@gmail.com', '6584', 14),
('hamidi', 'ali', 'dakhla agadir', 'hamidi@gmail.com', '6584', 15),
('mohemed', 'ali', 'ait meloul', 'hamid@gmail.com', '123654', 16),
('vmohemed', 'ali', 'ait meloul', 'hamid@gmail.com', '123654', 17),
('achraf', 'ali', 'agadir ', 'achraf@gmail.com', '456212', 18),
('vmohemed', 'rachid', 'ait meloul', 'achraf@gmail.com', '123654', 19),
('mohemed', 'rachid', 'ait meloul', 'hamidi@gmail.com', '123654', 20),
('mohemed', 'rachid', 'ait meloul', 'hamidi@gmail.com', '123654', 21),
('vmohemed', 'rachid', 'ait meloul', 'rachid@gmail.com', '123654', 22),
('vmohemed', 'rachid', 'ait meloul', 'rachid@gmail.com', '123654', 23),
('vmohemed', 'rachid', 'ait meloul', 'karim@gmail.com', '123654', 24),
('vmohemed', 'rachid', 'ait meloul', 'karim@gmail.com', '123654', 25),
('vmohemed', 'rachid', 'ait meloul', 'karim@gmail.com', '123654', 26),
('vmohemed', 'ali', 'ait meloul', 'hamidi@gmail.com', '123654', 27),
('vmohemed', 'ali', 'ait meloul', 'hamidi@gmail.com', '123654', 28),
('vmohemed', 'ali', 'ait meloul', 'hamidi@gmail.com', '123654', 29),
('vmohemed', 'rachid', 'ait meloul', 'achraf@gmail.com', '123654', 30),
('mohemed', 'rachid', 'agadir ', 'karim@gmail.com', '123654', 31),
('hamidi', 'rachid', 'agadir ', 'rachid@gmail.com', '6584', 32),
('hamidi', 'rachid', 'agadir ', 'rachid@gmail.com', '6584', 33),
('hamidi', 'rachid', 'agadir ', 'rachid@gmail.com', '6584', 34),
('vol', 'ali', 'agadir ', 'vol@gmail.com', '123654', 35),
('ex', 'ali', 'ait meloul', 'ex@gmail.com', '456212', 36),
('', '', '', '', '0', 37),
('', '', '', '', '0', 38),
('', '', '', '', '0', 39),
('', '', '', '', '0', 40),
('', '', '', '', '0', 41),
('', '', '', '', '0', 42),
('vmohemed', 'rachid', 'ait meloul', 'vol@gmail.com', '123654', 43),
('vmohemed', 'rachid', 'ait meloul', 'vol@gmail.com', '123654', 44),
('vmohemed', 'rachid', 'ait meloul', 'vol@gmail.com', '123654', 45),
('vmohemed', 'rachid', 'ait meloul', 'vol@gmail.com', '123654', 46),
('vmohemed', 'rachid', 'ait meloul', 'vol@gmail.com', '123654', 47);

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

CREATE TABLE IF NOT EXISTS `concerne` (
  `N_RESERVATION` decimal(8,0) NOT NULL,
  `N_CHAMBRE` decimal(8,0) NOT NULL,
  PRIMARY KEY (`N_RESERVATION`,`N_CHAMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `concerne`
--

INSERT INTO `concerne` (`N_RESERVATION`, `N_CHAMBRE`) VALUES
('1', '1'),
('2', '3'),
('3', '2'),
('20', '0'),
('21', '0'),
('22', '0'),
('23', '0'),
('24', '0'),
('25', '0'),
('26', '7'),
('27', '1'),
('28', '1'),
('29', '6'),
('30', '1'),
('31', '6'),
('32', '0'),
('33', '0'),
('34', '5'),
('35', '0'),
('36', '0'),
('37', '0'),
('38', '0');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `N_HOTEL` decimal(8,0) NOT NULL,
  `ID_VILLE` decimal(8,0) NOT NULL,
  `NOM_HOTEL_` text,
  `ADRESSE_HOTEL_` text,
  `TEL_HOTEL_` decimal(8,0) DEFAULT NULL,
  `NBR_ETOILE` decimal(8,0) DEFAULT NULL,
  `photo_hotel` text NOT NULL,
  PRIMARY KEY (`N_HOTEL`),
  KEY `FK_APPARTIENT` (`ID_VILLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `hotel`
--

INSERT INTO `hotel` (`N_HOTEL`, `ID_VILLE`, `NOM_HOTEL_`, `ADRESSE_HOTEL_`, `TEL_HOTEL_`, `NBR_ETOILE`, `photo_hotel`) VALUES
('1', '1', 'hotel argana', 'houda', '61', '2', 'hotel-2'),
('2', '2', 'hotel guelmim', 'tiznit', '221', '4', 'hotel-4'),
('3', '1', 'hotel adrar', 'mall', '12', '3', 'hotel-3'),
('4', '1', 'hotel med', ' salam', '14', '3', 'blog-3');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `ID_PAIEMENT` decimal(8,0) NOT NULL,
  `DATE_PAIEMENT` date DEFAULT NULL,
  `SOMME` decimal(8,0) DEFAULT NULL,
  `n_reservation` int(11) NOT NULL,
  PRIMARY KEY (`ID_PAIEMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `paiement`
--

INSERT INTO `paiement` (`ID_PAIEMENT`, `DATE_PAIEMENT`, `SOMME`, `n_reservation`) VALUES
('1', NULL, NULL, 0),
('2', '2019-04-01', '6', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `N_RESERVATION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENT` int(11) NOT NULL,
  `DATE_DEBUT` date DEFAULT NULL,
  `DATE_FIN` date DEFAULT NULL,
  PRIMARY KEY (`N_RESERVATION`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`N_RESERVATION`, `ID_CLIENT`, `DATE_DEBUT`, `DATE_FIN`) VALUES
(1, 1, '2019-04-01', '2019-04-10'),
(2, 2, '2019-04-01', '2019-04-10'),
(3, 2, '2019-05-01', '2019-05-10'),
(5, 1, '2019-04-01', '2019-04-10'),
(6, 0, '0000-00-00', '0000-00-00'),
(7, 0, '2019-03-23', '2019-03-24'),
(8, 17, '2019-03-23', '2019-03-24'),
(9, 18, '2019-04-01', '2019-04-10'),
(10, 19, '2019-04-01', '2019-04-10'),
(11, 20, '2019-04-01', '2019-04-10'),
(12, 21, '2019-04-01', '2019-04-10'),
(13, 22, '2019-04-01', '2019-04-10'),
(14, 23, '2019-04-01', '2019-04-10'),
(15, 24, '2019-04-01', '2019-04-10'),
(16, 25, '2019-04-01', '2019-04-10'),
(17, 26, '2019-04-01', '2019-04-10'),
(18, 27, '2019-04-01', '2019-04-10'),
(19, 28, '2019-04-01', '2019-04-10'),
(20, 29, '2019-04-01', '2019-04-10'),
(21, 30, '2019-03-23', '2019-03-25'),
(22, 31, '2019-03-23', '2019-03-25'),
(23, 32, '2019-03-22', '2019-03-22'),
(24, 33, '2019-03-22', '2019-03-22'),
(25, 34, '2019-03-22', '2019-03-22'),
(26, 35, '2019-04-01', '2019-03-22'),
(27, 36, '2019-03-23', '2019-03-31'),
(28, 37, '2019-03-22', '2019-03-22'),
(29, 38, '2019-03-22', '2019-03-22'),
(30, 39, '2019-03-23', '2019-03-24'),
(31, 40, '2019-03-23', '2019-03-24'),
(32, 41, '2019-03-23', '2019-03-24'),
(33, 42, '2019-03-23', '2019-03-24'),
(34, 43, '2019-03-22', '2019-03-22'),
(35, 44, '2019-03-22', '2019-03-22'),
(36, 45, '2019-03-22', '2019-03-22'),
(37, 46, '2019-03-22', '2019-03-22'),
(38, 47, '2019-03-22', '2019-03-22');

-- --------------------------------------------------------

--
-- Structure de la table `valider`
--

CREATE TABLE IF NOT EXISTS `valider` (
  `IDADMIN` decimal(8,0) NOT NULL,
  `N_RESERVATION` decimal(8,0) NOT NULL,
  PRIMARY KEY (`IDADMIN`,`N_RESERVATION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `ID_VILLE` decimal(8,0) NOT NULL,
  `NOM_VILLE` text,
  PRIMARY KEY (`ID_VILLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`ID_VILLE`, `NOM_VILLE`) VALUES
('1', 'agadir'),
('2', 'guelmim');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `FK_APPARTIENT` FOREIGN KEY (`ID_VILLE`) REFERENCES `ville` (`ID_VILLE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
