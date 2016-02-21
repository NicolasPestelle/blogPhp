-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Février 2016 à 18:54
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`) VALUES
(16, 'Lorem Ipsum', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis fermentum sem vel mollis. Curabitur id faucibus ipsum, non placerat est. Praesent sed pellentesque velit. Donec finibus neque eu ligula hendrerit, eu egestas est dictum. Aenean risus libero, porttitor at massa tempor, suscipit molestie velit. Maecenas scelerisque, metus eget lacinia auctor, risus nulla ultricies est, a consectetur odio purus id dolor. Vestibulum ultricies sodales erat sit amet posuere. Sed eget mollis purus. Nulla cursus mi at consequat semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer nisi leo, posuere at volutpat eget, dignissim ut nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Mauris ac arcu sagittis risus aliquam volutpat. Ut aliquam mattis feugiat.Sed malesuada lacus nulla, quis posuere urna varius vel. Duis nec massa quam. Ut lobortis eleifend urna at eleifend. Integer est risus, pharetra nec tellus sed, sollicitudin convallis ante. Fusce quis pulvinar augue, nec commodo ante. Ut arcu urna, varius at nisi eu, blandit ullamcorper metus. Aliquam vel arcu ipsum. Aenean consequat leo id ante semper condimentum. Donec rutrum tincidunt augue. In porta luctus pharetra.Donec accumsan commodo cursus. Aenean tincidunt tempus semper. Maecenas purus est, consectetur nec erat id, tristique feugiat est. Suspendisse eu velit quis dui viverra fermentum non sit amet arcu. Maecenas id purus augue. In quis eros non nisl ullamcorper posuere. Maecenas sollicitudin magna et congue auctor. Etiam eros mi, rhoncus eu blandit quis, tristique non sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque suscipit pretium diam, ac rhoncus sem. Sed vel tortor id sapien efficitur convallis quis sit amet nunc. Suspendisse convallis neque quis sem convallis faucibus. Nam congue mauris eget ullamcorper fringilla. Maecenas nisl dolor, lacinia vitae ultricies rhoncus, consectetur quis eros. Nam convallis augue vitae massa efficitur fermentum.Vivamus dictum quis nisi nec blandit. Maecenas sit amet purus risus. Nulla porttitor nibh eu velit consectetur laoreet. Pellentesque ex magna, ultricies sit amet tincidunt dictum, consectetur a nisi. In lacinia ligula ut odio elementum, ut rhoncus tortor aliquam. Vivamus sit amet lectus nec libero aliquam euismod. Etiam vel vestibulum magna. In iaculis justo vitae commodo aliquet. Quisque et tincidunt dui. In fringilla diam metus, eu laoreet augue aliquet ut. Cras quis quam enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean nec risus a est ullamcorper imperdiet. Mauris pulvinar sodales augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;Nullam quis tempor dolor. Proin efficitur, est quis dignissim accumsan, orci arcu euismod arcu, id condimentum lectus nibh id est. Maecenas accumsan dictum lacus id vestibulum. Nam et facilisis augue. Cras eget enim euismod, convallis tellus eleifend, commodo ex. Nunc eu placerat quam. Integer velit enim, sagittis ac malesuada sit amet, gravida ac dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque feugiat ex ex, ornare iaculis nulla blandit non. Integer mollis turpis posuere turpis cursus malesuada. Nulla aliquam sagittis massa vitae ultricies. Mauris ac orci nibh. Aliquam eget eros mi. Aliquam ex diam, molestie eget luctus non, lacinia eu leo. Sed a molestie ante, in porta purus. Donec id leo elit', '2015-11-30'),
(73, 'Ajout Image', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis fermentum sem vel mollis. Curabitur id faucibus ipsum, non placerat est. Praesent sed pellentesque velit. Donec finibus neque eu ligula hendrerit, eu egestas est dictum. Aenean risus libero, porttitor at massa tempor, suscipit molestie velit. Maecenas scelerisque, metus eget lacinia auctor, risus nulla ultricies est, a consectetur odio purus id dolor. Vestibulum ultricies sodales erat sit amet posuere. Sed eget mollis purus. Nulla cursus mi at consequat semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer nisi leo, posuere at volutpat eget, dignissim ut nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Mauris ac arcu sagittis risus aliquam volutpat. Ut aliquam mattis feugiat.Sed malesuada lacus nulla, quis posuere urna varius vel. Duis nec massa quam. Ut lobortis eleifend urna at eleifend. Integer est risus, pharetra nec tellus sed, sollicitudin convallis ante. Fusce quis pulvinar augue, nec commodo ante. Ut arcu urna, varius at nisi eu, blandit ullamcorper metus. Aliquam vel arcu ipsum. Aenean consequat leo id ante semper condimentum. Donec rutrum tincidunt augue. In porta luctus pharetra.Donec accumsan commodo cursus. Aenean tincidunt tempus semper. Maecenas purus est, consectetur nec erat id, tristique feugiat est. Suspendisse eu velit quis dui viverra fermentum non sit amet arcu. Maecenas id purus augue. In quis eros non nisl ullamcorper posuere. Maecenas sollicitudin magna et congue auctor. Etiam eros mi, rhoncus eu blandit quis, tristique non sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque suscipit pretium diam, ac rhoncus sem. Sed vel tortor id sapien efficitur convallis quis sit amet nunc. Suspendisse convallis neque quis sem convallis faucibus. Nam congue mauris eget ullamcorper fringilla. Maecenas nisl dolor, lacinia vitae ultricies rhoncus, consectetur quis eros. Nam convallis augue vitae massa efficitur fermentum.Vivamus dictum quis nisi nec blandit. Maecenas sit amet purus risus. Nulla porttitor nibh eu velit consectetur laoreet. Pellentesque ex magna, ultricies sit amet tincidunt dictum, consectetur a nisi. In lacinia ligula ut odio elementum, ut rhoncus tortor aliquam. Vivamus sit amet lectus nec libero aliquam euismod. Etiam vel vestibulum magna. In iaculis justo vitae commodo aliquet. Quisque et tincidunt dui. In fringilla diam metus, eu laoreet augue aliquet ut. Cras quis quam enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean nec risus a est ullamcorper imperdiet. Mauris pulvinar sodales augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;Nullam quis tempor dolor. Proin efficitur, est quis dignissim accumsan, orci arcu euismod arcu, id condimentum lectus nibh id est. Maecenas accumsan dictum lacus id vestibulum. Nam et facilisis augue. Cras eget enim euismod, convallis tellus eleifend, commodo ex. Nunc eu placerat quam. Integer velit enim, sagittis ac malesuada sit amet, gravida ac dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque feugiat ex ex, ornare iaculis nulla blandit non. Integer mollis turpis posuere turpis cursus malesuada. Nulla aliquam sagittis massa vitae ultricies. Mauris ac orci nibh. Aliquam eget eros mi. Aliquam ex diam, molestie eget luctus non, lacinia eu leo. Sed a molestie ante, in porta purus. Donec id leo elit', '2016-01-11'),
(79, 'toto', 'toto', '2016-02-21'),
(80, 'tata tata titi', 'totot titi tata', '2016-02-21');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`, `sid`, `nom`, `prenom`) VALUES
(1, 'toto@toto.fr', 'f71dbe52628a3f83a77ab494817525c6', 'cec9c173b4bc122fd2b83dd56ba7020a', 'toto', 'toto'),
(2, 'tata@tata.fr', '49d02d55ad10973b7b9d0dc9eba7fdf0', 'efb42cae605b2ce929e55a44e262b978', 'tata', 'tata');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
