-- phpMyAdmin SQL Dump
-- version 5.2.0-1.el9
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 30 jan. 2023 à 19:41
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `id` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`id`, `nom`, `description`, `image`) VALUES
(1, 'Kinect Sports: Season Two', 'Jeu de sport développé par Rare et édité par Microsoft Studios. C\'est le deuxième opus de la série Kinect Sports et a été publié en 2011.', 'kinect.jpg'),
(2, 'Grand Theft Auto V', 'Un jeu d\'action-aventure en monde ouvert, avec une grande liberté de mouvement et de nombreux mini-jeux.', 'GTAV.png'),
(3, 'Halo 3', 'Un jeu de tir à la première personne en vue à la troisième personne développé par Bungie Studios. Le joueur incarne le personnage de Master Chief, un soldat de l\'humanité, dans sa lutte contre les Covenants, une alliance extraterrestre.', 'Halo.png'),
(4, 'Minecraft', 'Jeu de construction et de survie développé et édité par Mojang Studios. C\'est un jeu vidéo très populaire qui a été publié en 2011 et qui est disponible sur de nombreuses plateformes.', 'minecraft.jpg'),
(5, 'Borderlands 2', 'Jeu de tir en vue à la première personne développé par Gearbox Software et édité par 2K Games. C\'est le deuxième opus de la série Borderlands et a été publié en 2012.', 'borderlands2.jpg'),
(6, 'The Elder Scrolls V: Skyrim', 'Jeu de rôle développé par Bethesda Game Studios et édité par Bethesda Softworks. C\'est le cinquième opus de la série The Elder Scrolls et a été publié en 2011.', 'skyrim.jpg'),
(7, 'Forza Motorsport 4', 'Jeu de course développé par Turn 10 Studios et édité par Microsoft Studios. C\'est le quatrième opus de la série Forza Motorsport et a été publié en 2011.', 'forza.jpg'),
(8, 'Fable 2', 'Un RPG où vos choix ont un impact sur votre personnage et sur le monde qui l\'entoure.', 'fable.png'),
(9, 'Gears of War', 'Un jeu de tir à la troisième personne développé par Epic Games. Le joueur incarne Marcus Fenix, un soldat de l\'humanité, dans sa lutte contre les Locusts, une race de créatures extraterrestres surgies des entrailles de la Terre.', 'GOW.png'),
(10, 'Far Cry', 'Far Cry est un jeu d\'action-aventure en monde ouvert, développé par Ubisoft Montréal et édité par Ubisoft.', 'farcry.jpg'),
(11, 'God of War', 'God of War est un jeu d\'action-aventure développé par SIE Santa Monica Studio et édité par Sony Interactive Entertainment.', 'godofwar.jpg'),
(12, 'Red Dead Redemption', 'Red Dead Redemption est un jeu d\'action-aventure en monde ouvert développé par Rockstar San Diego et publié par Rockstar Games. Le jeu se déroule dans un univers western fictif et met en scène le personnage principal John Marston, un ancien criminel qui est contraint de traquer ses anciens complices pour le compte de l\'agence de détectives de Pinkerton. Le jeu a été salué pour son ambiance, sa narrativité et ses mécaniques de gameplay.', 'red-dead-redemption.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `jeu_tag`
--

CREATE TABLE `jeu_tag` (
  `jeu_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `jeu_tag`
--

INSERT INTO `jeu_tag` (`jeu_id`, `tag_id`) VALUES
(3, 1),
(5, 1),
(10, 1),
(2, 2),
(3, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(3, 3),
(5, 3),
(9, 3),
(9, 4),
(5, 5),
(6, 5),
(8, 5),
(8, 6),
(2, 7),
(8, 7),
(6, 9),
(7, 10),
(7, 11),
(1, 12),
(1, 13),
(4, 14),
(4, 15),
(4, 16),
(10, 16),
(11, 16),
(12, 16),
(2, 19),
(10, 19),
(12, 19),
(11, 20),
(12, 21);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id`, `genre`) VALUES
(1, 'FPS'),
(2, 'Action'),
(3, 'Science-fiction'),
(4, 'TPS'),
(5, 'RPG'),
(6, 'Choix'),
(7, 'Solo'),
(9, 'Fantastique'),
(10, 'Course'),
(11, 'Simulation'),
(12, 'Sport'),
(13, 'Mouvement'),
(14, 'Construction'),
(15, 'Survie'),
(16, 'Aventure'),
(19, 'Open-World'),
(20, 'Hack & Slash'),
(21, 'Western');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`) VALUES
(1, 'AlaskaLane', 'M02P@ss'),
(2, 'EmmaSwan', 'Bl@ckSw@n'),
(3, 'root', '23_Password'),
(4, 'seb', 'seb'),
(5, 'SkoZze', 'aabb');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeu_tag`
--
ALTER TABLE `jeu_tag`
  ADD PRIMARY KEY (`jeu_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jeu_tag`
--
ALTER TABLE `jeu_tag`
  ADD CONSTRAINT `jeu_tag_ibfk_1` FOREIGN KEY (`jeu_id`) REFERENCES `jeu` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `jeu_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
