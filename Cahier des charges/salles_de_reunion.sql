-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Juillet 2018 à 09:16
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salles_de_reunion`
--

CREATE database `salles_de_reunion`;
use `salles_de_reunion`;

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `createReservation` (IN `id_user` INT(11), IN `id_salle_res` INT(11), IN `debut_res` DATETIME, IN `fin_res` DATETIME, IN `est_facult` BOOLEAN, IN `descri` VARCHAR(255), IN `invite` BOOLEAN)  MODIFIES SQL DATA
INSERT INTO reservation ( id_utilisateur, id_salle, debut_reservation, fin_reservation, est_facultatif, description, est_invite ) VALUES ( id_user, id_salle_res, debut_res, fin_res, est_facult, descri, invite )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `createSalle` (IN `nom` VARCHAR(100), IN `disponibilite` BOOLEAN)  NO SQL
INSERT INTO salles( nom_salle, disponibilite_salle ) VALUES ( nom, disponibilite )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `createUser` (IN `nom` VARCHAR(100), IN `prenom` VARCHAR(100), IN `mail` VARCHAR(200), IN `mdp` VARCHAR(100), IN `admin` BOOLEAN, IN `pdg` BOOLEAN, IN `bloque` INT(1))  NO SQL
INSERT INTO utilisateurs ( nom_utilisateur, prenom_utilisateur, mail_utilisateur, mdp_utilisateur,est_admin, est_pdg, est_bloque ) 
VALUES ( nom, prenom, mail, mdp, admin, pdg, bloque )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteSalle` (IN `id` INT(11))  MODIFIES SQL DATA
BEGIN	
	DELETE 
    FROM reservations 
    WHERE id_salle = id ;
    
    DELETE 
    FROM salles 
    WHERE id_salle = id ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUser` (IN `id` INT(11))  NO SQL
BEGIN

	DELETE 
	FROM reservations 
	WHERE id_utilisateur = id ; 

	DELETE 
	FROM utilisateurs 
	WHERE id_utilisateur = id ; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getReservations` ()  READS SQL DATA
SELECT * FROM reservations$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getReservationsByIDSalle` (IN `idSalle` INT(11))  NO SQL
SELECT *
FROM reservations
WHERE id_salle = IdSalle$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getReservationsByIDUser` (IN `idUser` INT(11))  NO SQL
SELECT *
FROM reservations
WHERE id_utilisateur = IdUser$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getReservationsExistant` (IN `id_utilisateur_res` INT(11), IN `id_salle_res` INT(11), IN `date_debut` DATETIME, IN `date_fin` DATETIME)  NO SQL
BEGIN

SELECT DISTINCT * 
FROM reservations
WHERE ( id_salle = id_salle_res
OR id_utilisateur = id_utilisateur_res )
AND (debut_reservation BETWEEN date_debut AND date_fin
OR fin_reservation BETWEEN date_debut AND date_fin );

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getReservationsIntervalle` (IN `date_debut` DATETIME, IN `date_fin` DATETIME)  NO SQL
SELECT DISTINCT *
FROM reservations
WHERE ( DATE(debut_reservation) BETWEEN DATE(date_debut) AND DATE(date_fin)
AND DATE(fin_reservation) BETWEEN DATE(date_debut) AND DATE(date_fin) )
OR DATE(date_debut) = DATE(debut_reservation)
OR DATE(date_debut) = DATE(fin_reservation)
OR DATE(date_fin) = DATE(debut_reservation)
OR DATE(date_fin) = DATE(fin_reservation)
ORDER BY debut_reservation$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getSalleById` (IN `id` INT(11))  NO SQL
SELECT *
FROM salles
WHERE id_salle = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getSalleDisponnible` (IN `estDispo` BOOLEAN)  READS SQL DATA
SELECT *
FROM salles
WHERE disponibilite_salle = estDispo$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getSalles` ()  READS SQL DATA
SELECT * FROM salles$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getUserById` (IN `id` INT(11))  READS SQL DATA
SELECT *
FROM utilisateurs
WHERE id_utilisateur = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getUserByMail` (IN `mail` VARCHAR(200))  READS SQL DATA
SELECT *
FROM utilisateurs
WHERE mail_utilisateur = mail$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getUsers` ()  READS SQL DATA
SELECT * FROM utilisateurs$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getUsersByTypeUser` (IN `id` INT(11))  NO SQL
SELECT *
FROM utilisateurs
WHERE id_type_utilisateur = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateSalle` (IN `id` INT(11), IN `nom` VARCHAR(100), IN `disponibilite` BOOLEAN)  NO SQL
UPDATE salles
SET nom_salle = nom,
	disponibilite_salle = disponibilite 
WHERE id_salle = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUser` (IN `id_user` INT(11), IN `nom` VARCHAR(100), IN `prenom` VARCHAR(100), IN `mail` VARCHAR(200), IN `mdp` VARCHAR(100), IN `admin` BOOLEAN, IN `pdg` BOOLEAN, IN `bloque` INT(1))  NO SQL
UPDATE utilisateurs 
SET nom_utilisateur = nom, 
	prenom_utilisateur = prenom, 
	mail_utilisateur = mail, 
	mdp_utilisateur = mdp, 
    est_admin = admin,
    est_pdg = pdg,
    est_bloque = bloque
WHERE id_utilisateur = id_user$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `debut_reservation` datetime DEFAULT NULL,
  `fin_reservation` datetime DEFAULT NULL,
  `est_facultatif` tinyint(1) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `est_invite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservations`
--

INSERT INTO `reservations` (`debut_reservation`, `fin_reservation`, `est_facultatif`, `description`, `id_utilisateur`, `id_salle`, `est_invite`) VALUES
('2018-07-23 08:00:00', '2018-07-23 10:00:00', 0, 'test', 1, 1, 0),
('2018-04-01 08:00:00', '2018-04-01 10:00:00', 0, 'test', 1, 5, 0),
('2018-07-27 10:00:00', '2018-07-27 13:00:00', 0, 'test', 1, 9, 0),
('2018-07-23 08:00:00', '2018-07-23 11:00:00', 0, 'test', 2, 2, 0),
('2018-04-01 14:00:00', '2018-04-01 16:00:00', 0, 'test 2', 2, 5, 0),
('2018-07-27 10:00:00', '2018-07-27 13:00:00', 0, 'test', 2, 8, 0),
('2018-04-01 08:00:00', '2018-04-01 10:00:00', 0, 'test 4', 2, 9, 0),
('2018-07-24 10:00:00', '2018-07-24 12:00:00', 0, 'test', 3, 1, 0),
('2018-07-23 10:00:00', '2018-07-23 12:00:00', 0, 'test', 4, 1, 0),
('2018-04-01 16:00:00', '2018-04-01 17:00:00', 0, 'test 3', 4, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `id_salle` int(11) NOT NULL,
  `nom_salle` varchar(100) DEFAULT NULL,
  `disponibilite_salle` tinyint(1) DEFAULT NULL,
  `description_salle` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `salles`
--

INSERT INTO `salles` (`id_salle`, `nom_salle`, `disponibilite_salle`, `description_salle`) VALUES
(1, 'salle 1', 1, NULL),
(2, 'salle 2', 1, NULL),
(3, 'salle 3', 1, NULL),
(4, 'salle 4', 0, NULL),
(5, 'salle 5', 1, NULL),
(6, 'salle 6', 0, NULL),
(7, 'salle 7', 1, NULL),
(8, 'salle 8', 1, NULL),
(9, 'salle 9', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(100) DEFAULT NULL,
  `prenom_utilisateur` varchar(100) DEFAULT NULL,
  `mail_utilisateur` varchar(200) DEFAULT NULL,
  `mdp_utilisateur` varchar(100) DEFAULT NULL,
  `est_admin` tinyint(1) NOT NULL DEFAULT '0',
  `est_pdg` tinyint(1) NOT NULL DEFAULT '0',
  `est_bloque` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `mail_utilisateur`, `mdp_utilisateur`, `est_admin`, `est_pdg`, `est_bloque`) VALUES
(1, 'kasperski', 'victor', 'vk@sdsd', 'mdp', 1, 1, 0),
(2, 'BLAIX', 'Camille', 'cbl@gmail.com', 'cbl', 1, 0, 0),
(3, 'daurel', 'sebastien', 's.d@sdsd', 'sda', 0, 0, 0),
(4, 'GUERAR', 'Frank', 'fgu@gmail.com', 'fgu', 0, 0, 0),
(5, 'test', 'test', 'test', 'test', 0, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_utilisateur`,`id_salle`,`debut_reservation`,`fin_reservation`),
  ADD KEY `FK_reservation_id_salle` (`id_salle`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_reservation_id_salle` FOREIGN KEY (`id_salle`) REFERENCES `salles` (`id_salle`),
  ADD CONSTRAINT `FK_reservation_id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
