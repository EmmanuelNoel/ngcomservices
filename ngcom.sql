-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 12 août 2022 à 17:00
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ngcom`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `nom` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`nom`, `motDePasse`) VALUES
('NGComServices', 'ngcom@services@070411@');

-- --------------------------------------------------------

--
-- Structure de la table `demandeaccepte`
--

DROP TABLE IF EXISTS `demandeaccepte`;
CREATE TABLE IF NOT EXISTS `demandeaccepte` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `type_stage` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demandeattestation`
--

DROP TABLE IF EXISTS `demandeattestation`;
CREATE TABLE IF NOT EXISTS `demandeattestation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demandeattestation`
--

INSERT INTO `demandeattestation` (`id`, `nom`, `prenom`, `email`, `sexe`, `ecole`, `filiere`) VALUES
(1, 'sggsgs', 'svvsvsv', 'sgggs', 'ssbbs', 'sgsbbs', 'sgsggs'),
(2, 'sggsgs', 'svvsvsv', 'sgggs', 'ssbbs', 'sgsbbs', 'sgsggs');

-- --------------------------------------------------------

--
-- Structure de la table `listestagiaires`
--

DROP TABLE IF EXISTS `listestagiaires`;
CREATE TABLE IF NOT EXISTS `listestagiaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `type_stage` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

DROP TABLE IF EXISTS `stagiaire`;
CREATE TABLE IF NOT EXISTS `stagiaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `type_stage` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `fichiers` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dates` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
