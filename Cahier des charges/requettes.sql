/*Création d'une réservation*/
/*DELIMITER |
/*DROP PROCEDURE createReservation IF EXISTS 
/*CREATE PROCEDURE createReservation(IN id_user int(11), IN id_salle_res int(11), IN debut_res Datetime, IN fin_res Datetime, IN est_facult boolean, IN descri varchar(255))
/*BEGIN
/*	INSERT INTO reservation ( id_utilisateur, id_salle, debut_reservation, fin_reservation, est_facultatif, description ) 
/*	VALUES ( id_user, id_salle_res, debut_res, fin_res, est_facult, descri ) |	
/*END|
/*DELIMITER ;


/*Création d'un utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE CreateUser IF EXISTS
/*CREATE PROCEDURE CreateUser(IN nom varchar(100), IN prenom varchar(100), IN mail varchar(200), IN identifiant varchar(100), IN mdp varchar(100), IN typeUser int(11))
/*BEGIN
/*	INSERT INTO utilisateurs ( nom_utilisateur, prenom_utilisateur, mail_utilisateur, identifiant_utilisateur, mdp_utilisateur, id_type_utilisateur ) 
/*	VALUES ( nom, prenom, mail, identifiant, mdp, typeUser ) |
/*END |
/*DELIMITER;


/*Création d'une salle*/
/*DELIMITER |
/*DROP PROCEDURE CreateSalle IF EXISTS
/*CREATE PROCEDURE CreateSalle( IN nom varchar(100), IN disponibilite boolean)
/*BEGIN
/*	INSERT INTO salle( nom_salle, disponibilite_salle ) 
/*	VALUES ( nom, disponibilite ) |
/*END |
/*DELIMITER;


/*Création d'un type utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE CreateTypeUser IF EXISTS
/*CREATE PROCEDURE CreateTypeUser( IN nom_type varchar(50) )
/*BEGIN
/*	INSERT INTO type_utilisateur ( nom_type_utilisateur ) 
/*	VALUES ( nom_type ) |
/*END |
/*DELIMITER;


/*Modification d'un utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE UpdateUser ID EXISTS
/*CREATE PROCEDURE UpdateUser( IN id_user int(11), IN nom varchar(100), IN prenom varchar(100), IN mail varchar(200), IN identifiant varchar(100), IN mdp varchar(100), IN typeUser int(11) )
/*BEGIN
/*	UPDATE utilisateurs 
/*	SET nom_utilisateur = nom, 
/*		prenom_utilisateur = prenom, 
/*		mail_utilisateur = mail, 
/*		identifiant_utilisateur = identifiant, 
/*		mdp_utilisateur = mdp, 
/*		id_type_utilisateur = typeUser )
/*	WHERE id_utilisateur = id_user |
/*END |
/*DELIMITER ;


/*Modification d'une salle*/
/*DELIMITER |
/*DROP PROCEDURE UpdateSalle IF EXISTS
/*CREATE PROCEDURE UpdateSalle ( IN id int(11), IN nom int(100), IN disponibilite boolean )
/*BEGIN
/*	UPDATE salles
/*	SET nom_salle = nom,
/*	disponibilite_salle = disponibilite 
/*	WHERE id_salle = id |
/*END |
/*DELIMITER ;


/*Modifier réservation*/
DELIMITER |
DROP PROCEDURE updateReservation IF EXISTS
CREATE PROCEDURE updateReservation ( IN id_user int(11), IN id_old_salle int(11), IN id_new_salle int(11), IN debut_res Datetime, IN fin_res Datetime, IN est_facult boolean, IN descri varchar(255) )
BEGIN
	UPDATE reservation
	SET id_utilisateur = id_user,
		id_salle = id_new_salle,
		debut_reservation = debut_res,
		fin_reservation = fin_res,
		est_facultatif = est_facult,
		description = descri
	WHERE id_utilisateur = id_user
	AND id_salle = id_old_salle |
END |
DELIMITER ;


/*Modifier les types d'utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE updateTypeUtilisateur IF EXISTS
/*CREATE PROCEDURE updateTypeUtilisateur ( IN id int(11), IN nom varchar(50) )
/*BEGIN
/*	UPDATE type_utilisateur
/*	SET nom_type_utilisateur = nom
/*	WHERE id_type_utilisateur = id |
/*END |
/*DELIMITER ;


/*Suppression d'une réservation*/
DELIMITER |
DROP PROCEDURE deleteReservation IF EXISTS
CREATE PROCEDURE deleteReservation ( IN id_salle_res int(11), IN id_utilisateur_res int(11) )
BEGIN
	DELETE 
	FROM reservation
	WHERE id_utilisateur = id_utilisateur_res
	AND id_salle = id_salle_res |  
END |
DELIMITER ;


/*Suppression d'un type d'utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE deleteTypeUser IF EXISTS
/*CREATE PROCEDURE deleteTypeUser ( IN id int(11) )
/*BEGIN
/*	UPDATE utilisateurs
/*	SET id_type_utilisateur = null
/*	WHERE id_type_utilisateur = id |
/*
/*	DELETE 
/*	FROM type_utilisateur
/*	WHERE id_type_utilisateur = id |
/*END |
/*DELIMITER ; 


/*Suppression d'un utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE deleteUser IF EXISTS
/*CREATE PROCEDURE deleteUser ( IN id int(11) )
/*BEGIN
/*	DELETE
/*	FROM reservations
/*	WHERE id_utilisateur = id |
/*
/*	DELETE 
/*	FROM utilisateurs
/*	WHERE id_utilisateur = id |
/*END |
/*DELIMITER ;


/*Suppression d'une salle*/
/*DELIMITER |
/*DROP PROCEDURE deleteSalle IF EXISTS
/*CREATE PROCEDURE deleteSalle ( IN id int(11) )
/*BEGIN
/*	DELETE
/*	FROM reservation
/*	WHERE id_salle = id |
/*
/*	DELETE
/*	FROM salle
/*	WHERE id_salle = id |
/*END |
/*DELIMITER ;


/*Récupération des types_utilisateurs*/
/*DELIMITER |
/*DROP PROCEDURE getTypeUsers IF EXISTS
/*CREATE PROCEDURE getTypeUsers ()
/*BEGIN
/*	SELECT *
/*	FROM type_utilisateur |
/*END |
/*DELIMITER ;



/*Récupération d'un utilisateur par identifiant et mot de passe*/
/*DELIMITER |
/*DROP PROCEDURE getUserByIdentification IF EXISTS
/*CREATE PROCEDURE getUserByIdentification ( IN identifiant int(100), IN mdp varchar(100) )
/*BEGIN
/*	SELECT *
/*	FROM utilisateur
/*	WHERE identifiant_utilisateur = identifiant
/*	AND mdp_utilisateur = mdp |
/*END |
/*DELIMITER ;


/*Récupération d'un utilisateur par son id*/
/*DELIMITER |
/*DROP PROCEDURE getUserById IF EXISTS
/*CREATE PROCEDURE getUserById ( IN id int(11) )
/*BEGIN
/*	SELECT *
/*	FROM utilisateur
/*	WHERE id_utilisateur = id |
/*END |
/*DELIMITER ;


/*Récupération des utilisateur par type d'utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE getUsersByTypeUser IF EXISTS
/*CREATE PROCEDURE getUsersByTypeUser ( IN id int(11) )
/*BEGIN
/*	SELECT *
/*	FROM utilisateurs
/*	WHERE id_type_utilisateur = id |
/*END |
/*DELIMITER ;


/*Récupération des réservation d'un utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE getReservationsByIDUser IF EXISTS 
/*CREATE FUNCTION getReservationsByIDUser( IN IdUser int(11))
/*BEGIN
/*	SELECT *
/*	FROM reservations
/*	WHERE id_utilisateur = IdUser |
/*END |
/*DELIMITER ;


/*Récupération des réservation d'un utilisateur*/
/*DELIMITER |
/*DROP PROCEDURE getReservationsByIDSalle IF EXISTS 
/*CREATE FUNCTION getReservationsByIDSalle( IN IdSalle int(11))
/*BEGIN
/*	SELECT *
/*	FROM reservations
/*	WHERE id_salle = IdSalle |
/*END |
/*DELIMITER ;


/*Récupération de toutes les salles*/
/*DELIMITER |
/*DROP PROCEDURE getSalles IF EXISTS
/*CREATE PROCEDURE getSalles ()
/*BEGIN
/*	SELECT * FROM salle |
/*END |
/*DELIMITER ;


/*Récupération des salles disponnible */
/*DELIMITER |
/*DROP PROCEDURE getSallesDispo IF EXISTS
/*CREATE PROCEDURE getSallesDispo ( IN dispo boolean )
/*BEGIN
/*	SELECT *
/*	FROM salle
/*	WHERE disponibilite_salle = dispo |
/*END |
/*DELIMITER ;


/*Récupération des salles dont la réservation est possible */
DELIMITER |
DROP PROCEDURE getReservationsPossibles IF EXISTS
CREATE PROCEDURE getReservationsPossibles ( IN debut Datetime, IN fin Datetime )
BEGIN 
	SELECT *
	FROM salle
	WHERE id_salle IN (  
		SELECT id_salle
		FROM reservation
		WHERE est_facultatif = true
		OR ( debut_reservation NOT BETWEEN debut AND fin
		AND fin_reservation NOT BETWEEN debut AND fin )
	)
	AND disponibilite_salle = true |
END |
DELIMITER ;


/*Récupération de tous les utilisateurs*/
/*DELIMITER |
/*DROP PROCEDURE getUsers IF EXISTS
/*CREATE PROCEDURE getUsers ()
/*BEGIN
/*	SELECT * FROM utilisateur |
/*END |
/*DELIMITER ;


/*Récupération de toutes les reservations*/
/*DELIMITER |
/*DROP PROCEDURE getReservations IF EXISTS
/*CREATE PROCEDURE getReservations ()
/*BEGIN
/*	SELECT * FROM reservations |
/*END |
/*DELIMITER ;