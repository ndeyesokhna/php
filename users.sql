-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 20 Novembre 2019 à 10:51
-- Version du serveur :  5.7.28-0ubuntu0.18.04.4
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `groupe1`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `groupe` int(2) NOT NULL,
  `genre` int(1) NOT NULL,
  `laptop_id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `groupe`, `genre`, `laptop_id`, `password`, `date_enregistrement`) VALUES
(1, 'Diop', 'Alassane', 'alasane@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 03:09:25'),
(2, 'Idrissa', 'Kamara', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:28:07'),
(3, 'Souleymane', 'Ngom', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:28:07'),
(4, 'Mahmadane', 'Diop', '', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:30:11'),
(5, 'Aissatou', 'Badji', 'kamara@email.com', 1, 0, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:30:11'),
(6, 'Maissa', 'Sognane', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:30:11'),
(7, 'Ousmane', 'Ndiaye', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:30:11'),
(8, 'Adama', 'Gueye', '', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:30:11'),
(9, 'Idrissa', 'Kamara', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:30:11'),
(10, 'Joseph', 'Preira', '', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:31:20'),
(11, 'Nd Sokhna', 'Toure', 'kamara@email.com', 1, 0, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:31:20'),
(12, 'Ibrahima', 'Diop', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56'),
(13, 'August', 'Dacosta', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56'),
(14, 'Ndeye', 'Diouf', 'kamara@email.com', 1, 0, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56'),
(15, 'Alla', 'Sakho', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56'),
(16, 'Adama', 'Diagne', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56'),
(17, 'Adoul Aziz', 'FALL', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56'),
(18, 'Abdoullah', 'TOURE', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56'),
(19, 'Mamadou Sellou', 'Diallo', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56'),
(20, 'Omar', 'Faye', 'kamara@email.com', 1, 1, 0, 'e7247759c1633c0f9f1485f3690294a9', '2019-11-19 15:35:56');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
