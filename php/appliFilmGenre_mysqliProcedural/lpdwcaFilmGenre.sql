-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  sam. 06 fév. 2021 à 14:42
-- Version du serveur :  8.0.18
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
-- Base de données :  `lpdwca19`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `idFilm` int(11) NOT NULL AUTO_INCREMENT,
  `titreFilm` varchar(100) NOT NULL,
  `idGenre` tinyint(4) NOT NULL,
  `valideFilm` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idFilm`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`idFilm`, `titreFilm`, `idGenre`, `valideFilm`) VALUES
(1, 'Le dîner de con', 1, 1),
(2, 'Les bronzés font du ski', 1, 1),
(3, 'Taxi driver', 4, 1),
(4, 'Titanic', 4, 1),
(5, 'Pulp fiction', 3, 1),
(6, 'Cinquième élément', 2, 1),
(7, 'Les gendarmes', 1, 1),
(8, 'Men in black', 2, 1),
(9, 'Oceans\'s twelve', 3, 1),
(10, 'Shining', 1, 1),
(11, 'Orange mécanique', 2, 1),
(12, 'Le parrain', 3, 1),
(13, 'Gladiator', 5, 1),
(14, 'Le jour le plus long', 5, 1),
(15, 'Les affranchis', 3, 1),
(16, 'Les oiseaux', 4, 1),
(17, 'Jumanji', 2, 1),
(18, 'Bienvenue à Gattaca', 2, 1),
(19, 'Erin Brokovich', 4, 1),
(20, 'Talons aiguilles', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `film1`
--

DROP TABLE IF EXISTS `film1`;
CREATE TABLE IF NOT EXISTS `film1` (
  `idFilm` int(11) NOT NULL AUTO_INCREMENT,
  `titreFilm` varchar(100) NOT NULL,
  `valideFilm` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idFilm`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film1`
--

INSERT INTO `film1` (`idFilm`, `titreFilm`, `valideFilm`) VALUES
(1, 'L\'arnacoeur', 1),
(2, '20 ans d\'écart', 1),
(3, 'Le journal de Bridget Jones', 1),
(4, 'Serial lover', 1),
(5, 'S.O.S. fantômes', 1),
(6, 'Kursk', 1),
(7, 'Braveheart', 1),
(8, 'Les visiteurs', 1),
(9, 'Le dîner de cons', 1),
(10, 'Orange mécanique', 1),
(11, 'Le jour le plus long', 1);

-- --------------------------------------------------------

--
-- Structure de la table `film1_genre1`
--

DROP TABLE IF EXISTS `film1_genre1`;
CREATE TABLE IF NOT EXISTS `film1_genre1` (
  `idFilm` int(11) NOT NULL,
  `idGenre` tinyint(4) NOT NULL,
  UNIQUE KEY `filmGenre` (`idFilm`,`idGenre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film1_genre1`
--

INSERT INTO `film1_genre1` (`idFilm`, `idGenre`) VALUES
(1, 1),
(1, 6),
(2, 1),
(2, 6),
(3, 1),
(3, 6),
(4, 1),
(4, 3),
(5, 1),
(5, 2),
(6, 4),
(6, 5),
(7, 4),
(7, 5),
(8, 1),
(9, 1),
(10, 2),
(11, 5);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `idGenre` tinyint(4) NOT NULL AUTO_INCREMENT,
  `genre` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `valideGenre` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idGenre`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`idGenre`, `genre`, `valideGenre`) VALUES
(1, 'Comédie', 1),
(2, 'Fantastique', 1),
(3, 'Thiller', 1),
(4, 'Drame', 1),
(5, 'Historique', 1);

-- --------------------------------------------------------

--
-- Structure de la table `genre1`
--

DROP TABLE IF EXISTS `genre1`;
CREATE TABLE IF NOT EXISTS `genre1` (
  `idGenre` tinyint(4) NOT NULL AUTO_INCREMENT,
  `genre` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `valideGenre` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idGenre`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Déchargement des données de la table `genre1`
--

INSERT INTO `genre1` (`idGenre`, `genre`, `valideGenre`) VALUES
(1, 'Comédie', 1),
(2, 'Fantastique', 1),
(3, 'Thriller', 1),
(4, 'Drame', 1),
(5, 'Historique', 1),
(6, 'Romantique', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
