-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 juin 2024 à 18:51
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formationweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `id_chapitre` int(11) NOT NULL,
  `titre_chapitre` varchar(255) NOT NULL,
  `description_chapitre` text DEFAULT NULL,
  `id_cours` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chapitre`
--

INSERT INTO `chapitre` (`id_chapitre`, `titre_chapitre`, `description_chapitre`, `id_cours`) VALUES
(1, 'HTML Tags', 'Learn about different HTML tags.', 1),
(2, 'CSS Selectors', 'Understand CSS selector syntax.', 2),
(3, 'Variables and Data Types', 'Explore JavaScript variables and data types.', 3);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `contenu_commentaire` text DEFAULT NULL,
  `date_creation_commentaire` datetime DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_lecon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `titre_cours` varchar(255) NOT NULL,
  `description_cours` text DEFAULT NULL,
  `date_creation_cours` date DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `titre_cours`, `description_cours`, `date_creation_cours`, `id_utilisateur`) VALUES
(1, 'Introduction to HTML', 'Learn the basics of HTML.', '2022-01-15', 1),
(2, 'CSS Styling Techniques', 'Explore advanced CSS styling techniques.', '2022-02-01', 2),
(3, 'JavaScript Fundamentals', 'Master the fundamentals of JavaScript.', '2022-03-10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `duréevisionnage`
--

CREATE TABLE `duréevisionnage` (
  `id_duree` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_cours` int(11) DEFAULT NULL,
  `id_lecon` int(11) DEFAULT NULL,
  `duree_visionnage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `duréevisionnage`
--

INSERT INTO `duréevisionnage` (`id_duree`, `id_utilisateur`, `id_cours`, `id_lecon`, `duree_visionnage`) VALUES
(1, 1, 1, 1, 30),
(2, 1, 2, 2, 45),
(3, 2, 1, 1, 25);

-- --------------------------------------------------------

--
-- Structure de la table `leçon`
--

CREATE TABLE `leçon` (
  `id_lecon` int(11) NOT NULL,
  `titre_lecon` varchar(255) NOT NULL,
  `contenu_lecon` text DEFAULT NULL,
  `ordre_lecon` int(11) DEFAULT NULL,
  `id_chapitre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `leçon`
--

INSERT INTO `leçon` (`id_lecon`, `titre_lecon`, `contenu_lecon`, `ordre_lecon`, `id_chapitre`) VALUES
(1, 'Introduction to HTML', 'In this lesson, you will learn the basics of HTML.', 1, 1),
(2, 'CSS Box Model', 'Understand the CSS box model.', 2, 2),
(3, 'Variables and Constants', 'Learn about variables and constants in JavaScript.', 1, 3),
(6, 'PHP', 'Connect  my database', 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `email_utilisateur` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `email_utilisateur`, `mot_de_passe`) VALUES
(1, 'rym belhadj', 'belhadjjryma@gmail.com', '$2y$10$/TF8Etoeo7sdpkx1X1UEFuZr92o6QZ.sS805fWYxbaHM/2x8OYZ/i'),
(2, 'JohnDoe', 'john.doe@example.com', 'motdepasse123'),
(3, 'JaneSmith', 'jane.smith@example.com', 'azerty123'),
(5, 'Mohamed Belhadj', 'mohamedbelhadjj@gmail.com', 'hamma.hamma'),
(6, 'Bilel', 'BILEL@GMAIL.COM', '$2y$10$H3.m7zi.iDYhpCdOzCaSOuRp55Y3vbYofdQQ6b/L28lPlfPg2R5jm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`id_chapitre`),
  ADD KEY `id_cours` (`id_cours`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_lecon` (`id_lecon`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `duréevisionnage`
--
ALTER TABLE `duréevisionnage`
  ADD PRIMARY KEY (`id_duree`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_cours` (`id_cours`),
  ADD KEY `id_lecon` (`id_lecon`);

--
-- Index pour la table `leçon`
--
ALTER TABLE `leçon`
  ADD PRIMARY KEY (`id_lecon`),
  ADD KEY `id_chapitre` (`id_chapitre`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapitre`
--
ALTER TABLE `chapitre`
  MODIFY `id_chapitre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `duréevisionnage`
--
ALTER TABLE `duréevisionnage`
  MODIFY `id_duree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `leçon`
--
ALTER TABLE `leçon`
  MODIFY `id_lecon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD CONSTRAINT `chapitre_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_lecon`) REFERENCES `leçon` (`id_lecon`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `duréevisionnage`
--
ALTER TABLE `duréevisionnage`
  ADD CONSTRAINT `duréevisionnage_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `duréevisionnage_ibfk_2` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`),
  ADD CONSTRAINT `duréevisionnage_ibfk_3` FOREIGN KEY (`id_lecon`) REFERENCES `leçon` (`id_lecon`);

--
-- Contraintes pour la table `leçon`
--
ALTER TABLE `leçon`
  ADD CONSTRAINT `leçon_ibfk_1` FOREIGN KEY (`id_chapitre`) REFERENCES `chapitre` (`id_chapitre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
