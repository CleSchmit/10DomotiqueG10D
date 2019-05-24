-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 24 Mai 2019 à 14:55
-- Version du serveur :  10.1.38-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur_actionneur`
--

CREATE TABLE `capteur_actionneur` (
  `Id_Capteur` int(11) NOT NULL,
  `Nom` varchar(21) NOT NULL,
  `Model` int(21) NOT NULL,
  `Valeur` int(11) NOT NULL DEFAULT '999',
  `Id_Piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

CREATE TABLE `consommation` (
  `id_conso` int(21) NOT NULL,
  `globale` int(50) NOT NULL,
  `temps` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Adresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `consommation`
--

INSERT INTO `consommation` (`id_conso`, `globale`, `temps`, `Adresse`) VALUES
(17, 0, '2019-05-17 21:57:41', '15 avenue arblade'),
(76, 30, '2019-05-18 20:59:40', '15 avenue arblade'),
(77, 30, '2019-05-19 19:04:57', '15 avenue arblade'),
(78, 150, '2019-05-21 11:22:11', '15 avenue arblade'),
(79, 150, '2019-05-21 11:22:45', '15 avenue arblade');

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `nom` varchar(191) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `liste_capteur`
--

CREATE TABLE `liste_capteur` (
  `id_liste_capteur` int(11) NOT NULL,
  `Nom` varchar(21) NOT NULL,
  `Prix` int(21) NOT NULL,
  `Consommation` int(21) NOT NULL,
  `Model` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `id_conv` int(11) NOT NULL,
  `utilisateur` varchar(191) NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message_support`
--

CREATE TABLE `message_support` (
  `Id_Message` int(11) NOT NULL,
  `Titre` int(11) NOT NULL,
  `Contenu` int(11) NOT NULL,
  `Id_Profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `model_maison`
--

CREATE TABLE `model_maison` (
  `Id_Maison` int(11) NOT NULL,
  `Nom` varchar(21) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Superficie` int(11) NOT NULL,
  `NbPieces` int(11) NOT NULL,
  `NbHabitant` int(11) NOT NULL,
  `Id_Profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notation`
--

CREATE TABLE `notation` (
  `Id_Notation` int(11) NOT NULL,
  `Nb_Etoile` int(11) NOT NULL,
  `Commentaire` int(11) DEFAULT NULL,
  `Nom` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `Id_Piece` int(11) NOT NULL,
  `Nom` varchar(21) NOT NULL,
  `Superficie` int(11) NOT NULL,
  `Id_Maison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post_forum`
--

CREATE TABLE `post_forum` (
  `Id_post` int(11) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Contenu` text NOT NULL,
  `Id_Profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `Id_Profil` int(11) NOT NULL,
  `Prenom` varchar(21) DEFAULT NULL,
  `Nom` varchar(21) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Tel` int(11) DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `Mdp` varchar(250) NOT NULL,
  `Role` varchar(21) NOT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Validation` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`Id_Profil`, `Prenom`, `Nom`, `Email`, `Tel`, `DateNaissance`, `Mdp`, `Role`, `Adresse`, `Validation`) VALUES
(34, 'Admin', 'Admin', 'admin@mail.com', NULL, NULL, '$2y$10$/4pFTOge6Kp2lNuDzSGBWO8X5NSUz.UlT34a1XEsJrHiz628xPehe', 'Admin', NULL, 'ok');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `capteur_actionneur`
--
ALTER TABLE `capteur_actionneur`
  ADD PRIMARY KEY (`Id_Capteur`);

--
-- Index pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`id_conso`);

--
-- Index pour la table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `liste_capteur`
--
ALTER TABLE `liste_capteur`
  ADD PRIMARY KEY (`id_liste_capteur`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message_support`
--
ALTER TABLE `message_support`
  ADD PRIMARY KEY (`Id_Message`);

--
-- Index pour la table `model_maison`
--
ALTER TABLE `model_maison`
  ADD PRIMARY KEY (`Id_Maison`);

--
-- Index pour la table `notation`
--
ALTER TABLE `notation`
  ADD PRIMARY KEY (`Id_Notation`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`Id_Piece`);

--
-- Index pour la table `post_forum`
--
ALTER TABLE `post_forum`
  ADD PRIMARY KEY (`Id_post`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`Id_Profil`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `capteur_actionneur`
--
ALTER TABLE `capteur_actionneur`
  MODIFY `Id_Capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `consommation`
--
ALTER TABLE `consommation`
  MODIFY `id_conso` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT pour la table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `liste_capteur`
--
ALTER TABLE `liste_capteur`
  MODIFY `id_liste_capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `message_support`
--
ALTER TABLE `message_support`
  MODIFY `Id_Message` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `model_maison`
--
ALTER TABLE `model_maison`
  MODIFY `Id_Maison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `notation`
--
ALTER TABLE `notation`
  MODIFY `Id_Notation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `Id_Piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `post_forum`
--
ALTER TABLE `post_forum`
  MODIFY `Id_post` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `Id_Profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
