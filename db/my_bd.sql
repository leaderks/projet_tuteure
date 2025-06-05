-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Juin 2025 à 13:54
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `my_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `date_publication` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `contenu`, `date_publication`) VALUES
(1, 'Html pour les nulls', 'jk,ujkgkjdxfgxcmhtgxgx', '2025-05-23 19:41:15');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `nomUsers` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT '',
  `etat_user` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUsers`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idUsers`, `nomUsers`, `email`, `password`, `role`, `etat_user`) VALUES
(7, 'lea', 'lea@gmail.com', '$2y$10$lUMblvsNsZk7aWnZDSdmC.yYwTRMq8grMfi7ptfdKc0xcKXNcaf9G', 'administrateur', 0),
(9, 'Ariane', 'ariane@gmail.com', '$2y$10$m8cYnu3tzP6I3/vXdADiA.mh.MrmP1c4hfPaWOErYZIaOv71fLYW2', 'utilisateur', 1),
(10, 'kscode', 'admin@gmail.com', '$2y$10$kuC3AMV6myRf10IWvkbe2uOzcW8QYoGkGkgOQ76jVGimWBjf/KoRK', 'administrateur', 0),
(11, 'l', 'kjh@gmail.com', '$2y$10$QQapOlNHtqbZaf/Ribqcp.xxVS1VkM3svKPilsUdfMlm7mP7mq1ju', 'agriculteur', 0),
(15, 'kj', 'weekl@gmail.com', '$2y$10$G0XQcNHLXy/3wPqFZXlaDOCHZAui.zxCEAjO.GKskVqD9qtULdj5e', 'vendeur', 1),
(16, 'UniversitÃ© Afrique', 'bgh30@gmail.com', '$2y$10$1.njS0Y/IaaU33bKnXAeW./p7J7GjoB0cQspd2Q2GMFISKVsC8NiS', 'vendeur', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
