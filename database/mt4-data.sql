-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 28 jan. 2022 à 09:36
-- Version du serveur : 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mt4-data`
--

-- --------------------------------------------------------

--
-- Structure de la table `Comments`
--

CREATE TABLE `Comments` (
                            `idComment` int(11) NOT NULL,
                            `idUser` int(11) DEFAULT NULL,
                            `idPost` int(11) DEFAULT NULL,
                            `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Comments`
--

INSERT INTO `Comments` (`idComment`, `idUser`, `idPost`, `content`) VALUES
(1, 1, NULL, 'Ceci est le premier commentaire');

-- --------------------------------------------------------

--
-- Structure de la table `Post`
--

CREATE TABLE `Post` (
                        `idPost` int(11) NOT NULL,
                        `idUser` int(11) DEFAULT NULL,
                        `createdAt` datetime DEFAULT NULL,
                        `title` varchar(255) NOT NULL,
                        `image` tinyblob NOT NULL,
                        `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Post`
--

INSERT INTO `Post` (`idPost`, `idUser`, `createdAt`, `title`, `image`, `content`) VALUES
(1, 1, '2021-01-21 11:06:42', 'Je suis un premier article', '', 'Contenu du premier article'),
(2, 1, '2022-01-06 10:06:42', 'Je suis le second article de merde', '', 'Contenu du deuxième article');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
                        `idUser` int(11) NOT NULL,
                        `role` int(11) NOT NULL,
                        `email` varchar(255) NOT NULL,
                        `name` varchar(255) NOT NULL,
                        `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`idUser`, `role`, `email`, `name`, `password`) VALUES
(1, 0, 'julien@yopmail.com', 'Julien', 'password');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Comments`
--
ALTER TABLE `Comments`
    ADD PRIMARY KEY (`idComment`),
    ADD KEY `link comment to post` (`idPost`),
    ADD KEY `link comment to user` (`idUser`);

--
-- Index pour la table `Post`
--
ALTER TABLE `Post`
    ADD PRIMARY KEY (`idPost`),
    ADD KEY `link user to post` (`idUser`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
    ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Comments`
--
ALTER TABLE `Comments`
    MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Post`
--
ALTER TABLE `Post`
    MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
    MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Comments`
--
ALTER TABLE `Comments`
    ADD CONSTRAINT `link comment to post` FOREIGN KEY (`idPost`) REFERENCES `Post` (`idPost`),
    ADD CONSTRAINT `link comment to user` FOREIGN KEY (`idUser`) REFERENCES `User` (`idUser`);

--
-- Contraintes pour la table `Post`
--
ALTER TABLE `Post`
    ADD CONSTRAINT `link user to post` FOREIGN KEY (`idUser`) REFERENCES `User` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
