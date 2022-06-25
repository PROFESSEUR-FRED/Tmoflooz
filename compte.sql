-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 juin 2022 à 19:26
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tmoflooz`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id` int(11) NOT NULL,
  `nomCl` varchar(50) NOT NULL,
  `montant` int(11) NOT NULL,
  `numEnvoi` int(11) NOT NULL,
  `numRecp` int(11) NOT NULL,
  `dateEnvoe` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idtr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nomCl`, `montant`, `numEnvoi`, `numRecp`, `dateEnvoe`, `idtr`) VALUES
(1, 'ali', 5000, 7898654, 9762541, '2022-06-25 15:24:07', ''),
(2, 'tyy', 4513, 3265410, 4585556, '2022-06-25 17:23:59', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
