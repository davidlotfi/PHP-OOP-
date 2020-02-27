-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 27 Février 2020 à 15:41
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `photo_gallery`
--

-- --------------------------------------------------------

--
-- Structure de la table `photographs`
--

CREATE TABLE IF NOT EXISTS `photographs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `photographs`
--

INSERT INTO `photographs` (`id`, `filename`, `type`, `size`, `caption`) VALUES
(11, 'chita.jpg', 'image/jpeg', 43267, 'ÙØµÙ„ Ø§Ù„Ø´ØªØ§Ø¡'),
(13, 'nature.jpg', 'image/jpeg', 44768, 'farm'),
(14, 'a (12).jpg', 'image/jpeg', 76918, 'Ø§Ù†Ø¯Ù„Ø³'),
(15, 'wood.jpg', 'image/jpeg', 564389, 'wood'),
(16, 'bamboo.jpg', 'image/jpeg', 455568, 'bamboo'),
(17, 'a (2).jpg', 'image/jpeg', 92304, 'Ù‚Ø·ÙŠØ¹ Ø§Ù„ØºÙ†Ù…');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'doudou', 'doudou1994', 'abdellatif', 'boukernine'),
(2, 'bouk', 'doudou1994', 'habiba', 'boukernine'),
(3, 'bouk', 'doudou1994', 'habiba', 'boukernine');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
