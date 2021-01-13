-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 13 nov. 2020 à 12:21
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bus_transport_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_bm_bus`
--

CREATE TABLE `tb_bm_bus` (
  `bus_id` int(11) NOT NULL,
  `numPlaque` varchar(25) NOT NULL,
  `marqueBus` varchar(75) NOT NULL,
  `libelleBus` varchar(75) NOT NULL,
  `nombreSiege` int(11) NOT NULL,
  `dateAjout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_bm_chauffeurs`
--

CREATE TABLE `tb_bm_chauffeurs` (
  `chauff_id` int(11) NOT NULL,
  `matriculeChauffeur` varchar(25) NOT NULL,
  `nomChauffeur` varchar(75) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `adresseChauffeur` text NOT NULL,
  `dateAjout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_bm_entretiens`
--

CREATE TABLE `tb_bm_entretiens` (
  `ent_id` int(11) NOT NULL,
  `dateEntretien` date NOT NULL,
  `etatBus` varchar(75) NOT NULL,
  `panneDetectee` text NOT NULL,
  `pieceEndommagee` text NOT NULL,
  `ent_observation` text NOT NULL,
  `fraisEntretien` varchar(75) NOT NULL,
  `bus_sid` int(11) NOT NULL,
  `mec_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_bm_mecaniciens`
--

CREATE TABLE `tb_bm_mecaniciens` (
  `mec_id` int(11) NOT NULL,
  `nomMecanicien` varchar(75) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `adresse` text NOT NULL,
  `mec_observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_bm_mouvements`
--

CREATE TABLE `tb_bm_mouvements` (
  `mvm_id` int(11) NOT NULL,
  `bus_sid` int(11) NOT NULL,
  `chauf_sid` int(11) NOT NULL,
  `dateMouvement` date NOT NULL,
  `heureDepart` varchar(10) NOT NULL,
  `heureArrivee` varchar(10) NOT NULL,
  `destination` varchar(75) NOT NULL,
  `mvm_observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'logisticien',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT NULL,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(1, 'Elie Mwez', 'eliemwez', '$2y$12$lgSZ78FDfw7MUBBIrMgsfOB2BEBDapoD4jIJEtr.arj6dSYRoBDZG', 'eliemwez.rubuz@gmail.com', 'Masculin', '+243858533285', 'user', '2020-09-11 08:08:58', '2020-09-21 08:02:11', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-09-19 14:07:30', 'logisticien', '11220'),
(2, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243903774951', 'admin', '2020-09-21 08:01:52', '2020-11-08 15:41:08', 'active', 'global/img/avatars/IMG_20200309_110637_241.jpg', '2020-09-21 12:06:49', 'admin', '2020010'),
(3, 'Mohamed', 'mohamed', '$2y$12$FYqeLdDL.LqmcH7l2I1YZewnQiyRiBI343vwZezJtQRKZr5.qZsx.', 'mohamed@gmail.com', 'masculin', '+243975556941', 'user', '2020-10-18 17:40:01', '2020-11-13 09:33:34', 'active', NULL, '2020-11-08 15:46:52', 'gerant', '1122001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_bm_bus`
--
ALTER TABLE `tb_bm_bus`
  ADD PRIMARY KEY (`bus_id`),
  ADD UNIQUE KEY `numPlaque` (`numPlaque`);

--
-- Index pour la table `tb_bm_chauffeurs`
--
ALTER TABLE `tb_bm_chauffeurs`
  ADD PRIMARY KEY (`chauff_id`),
  ADD UNIQUE KEY `matriculeChauffeur` (`matriculeChauffeur`);

--
-- Index pour la table `tb_bm_entretiens`
--
ALTER TABLE `tb_bm_entretiens`
  ADD PRIMARY KEY (`ent_id`);

--
-- Index pour la table `tb_bm_mecaniciens`
--
ALTER TABLE `tb_bm_mecaniciens`
  ADD PRIMARY KEY (`mec_id`);

--
-- Index pour la table `tb_bm_mouvements`
--
ALTER TABLE `tb_bm_mouvements`
  ADD PRIMARY KEY (`mvm_id`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_bm_bus`
--
ALTER TABLE `tb_bm_bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_bm_chauffeurs`
--
ALTER TABLE `tb_bm_chauffeurs`
  MODIFY `chauff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_bm_entretiens`
--
ALTER TABLE `tb_bm_entretiens`
  MODIFY `ent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_bm_mecaniciens`
--
ALTER TABLE `tb_bm_mecaniciens`
  MODIFY `mec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_bm_mouvements`
--
ALTER TABLE `tb_bm_mouvements`
  MODIFY `mvm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
