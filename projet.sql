-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 17 nov. 2019 à 00:07
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `coordinatuer`
--

CREATE TABLE `coordinatuer` (
  `id` int(40) NOT NULL,
  `nom` text NOT NULL,
  `specialite` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coordinatuer`
--

INSERT INTO `coordinatuer` (`id`, `nom`, `specialite`) VALUES
(1, 'ahmed', 'info'),
(2, 'med', 'pc'),
(3, 'sidi', 'info');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `nom`, `date`) VALUES
(1, 'MATH_INFO', '2019-01-24'),
(2, 'PHY', '2015-01-20'),
(3, 'BIO_GIO', '0000-00-00'),
(4, 'MAI5', '2023-06-13');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(20) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `date` date NOT NULL,
  `lieu` text NOT NULL,
  `nation` text NOT NULL,
  `sexe` text NOT NULL,
  `nni` int(20) NOT NULL,
  `niveau` varchar(10) NOT NULL,
  `gr` varchar(10) NOT NULL,
  `filiere` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `numero`, `nom`, `prenom`, `date`, `lieu`, `nation`, `sexe`, `nni`, `niveau`, `gr`, `filiere`) VALUES
(1, 'C14142', 'ahmed', 'haida', '1999-01-28', 'KRM', 'RIM', 'M', 123456777, 'L2', 'G2', 'info'),
(2, 'C14134', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(3, 'C08900', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(4, 'C56778', 'khader', 'Abdel Hamide', '1979-09-24', 'Nema', 'RIM', 'masculin', 342432154, 'L3', 'G 1', 'BIO'),
(5, 'C15656', 'Samie', 'Ahmed', '2001-01-28', 'Kiffa', 'RIM', 'masculin', 675456438, 'L2', 'G 5', 'INFO'),
(6, 'C34123', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(7, 'C09890', 'Emira', 'Mhmoud', '2004-01-28', 'tanja', 'Maroc', 'femme', 214365439, 'L1', 'G1', 'BG'),
(8, 'C14133', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(9, 'C09890', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(10, 'C14120', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(11, 'C141345', 'toutou', 'didi', '1999-01-31', 'nktt', 'RIM', 'femme', 234566766, 'L3', '', 'D2I'),
(12, 'C14145', 'achetou', 'sidi', '1999-02-01', 'Nema', 'RIM', 'femme', 987654432, 'L3', 'G 1', 'PF'),
(13, 'C444444', 'achetou', 'Sidna', '2019-02-15', 'KRM', 'France', 'femme', 975454321, 'L1', 'G 2', 'INFO'),
(14, 'C0000', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(15, 'C222222', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(16, 'C0003', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(17, 'C14120', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(18, 'C4556677H', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(19, 'C14120', 'ahmed', 'Abdel Hamide', '2019-07-11', 'Kur Macen', 'France', 'masculin', 2147483647, 'L2', 'G1', 'INFO'),
(20, 'C23458', 'Ahmed Hayde ', 'brahim', '1997-11-07', 'Kiffa', 'France', 'masculin', 234567890, 'L3', 'G3', 'INFO');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(20) NOT NULL,
  `filiere` varchar(40) NOT NULL,
  `departement` text NOT NULL,
  `coordinateur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `filiere`, `departement`, `coordinateur`) VALUES
(1, 'MAI', 'MATH_INFO', 'Ahmed haida'),
(2, 'INFO', 'MATH_INFO', 'Sidi ahmed'),
(3, 'PF', '', 'med'),
(4, 'BG', 'BIO_GIO', 'med'),
(5, 'D2I', 'MATH_INFO', 'sidi'),
(6, 'SP', 'PHY', 'ahmed'),
(7, 'MA', 'MATH_INFO', 'sidi'),
(8, 'Genie Informatique', 'MATH_INFO', 'sidi'),
(9, 'mi', 'MATH_INFO', 'med'),
(10, 'dr2', 'MATH_INFO', 'med'),
(11, 'DA2I', 'MATH_INFO', 'sidi');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `etudiant` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `code`, `etudiant`) VALUES
(1, 'G1', 25),
(2, 'G2', 22),
(3, 'G3', 30),
(4, 'TD2345', 22);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `note` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `code`, `note`) VALUES
(2, 'MAT1400', 20),
(3, 'PHY2000', 20),
(4, 'INFO2700', 20),
(5, 'SC2345', 20),
(6, 'INFO2700', 20);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(20) NOT NULL,
  `niveau` varchar(20) NOT NULL,
  `filiere` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `niveau`, `filiere`) VALUES
(1, 'L1', 'MPI'),
(2, 'L2', 'INFO'),
(3, 'L3', 'D2I'),
(4, 'M1', ' Geni.info'),
(5, 'M2', 'Geni.Matt'),
(6, 'DR', 'MATAMATIQUE'),
(7, 'lllllÃ©Ã©', ''),
(8, 'L2', 'TSR');

-- --------------------------------------------------------

--
-- Structure de la table `passe`
--

CREATE TABLE `passe` (
  `id` int(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `motpass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `passe`
--

INSERT INTO `passe` (`id`, `nom`, `motpass`) VALUES
(1, 'AHMED', '0000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `coordinatuer`
--
ALTER TABLE `coordinatuer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `passe`
--
ALTER TABLE `passe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `coordinatuer`
--
ALTER TABLE `coordinatuer`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `passe`
--
ALTER TABLE `passe`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
