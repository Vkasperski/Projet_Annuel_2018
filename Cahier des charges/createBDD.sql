#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE salles_de_reunion ;
use salles_de_reunion ;

#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id_utilisateur          int (11) Auto_increment  NOT NULL ,
        nom_utilisateur         Varchar (100) ,
        prenom_utilisateur      Varchar (100) ,
        mail_utilisateur        Varchar (200) ,
        identifiant_utilisateur Varchar (100) ,
        mdp_utilisateur         Varchar (100) ,
        id_type_utilisateur     int (11) ,
        PRIMARY KEY (id_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: salle
#------------------------------------------------------------

CREATE TABLE salle(
        id_salle            int (11) Auto_increment  NOT NULL ,
        nom_salle           Varchar (100) ,
        disponibilite_salle Boolean ,
        PRIMARY KEY (id_salle )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type_utilisateur
#------------------------------------------------------------

CREATE TABLE type_utilisateur(
        id_type_utilisateur  int (11) Auto_increment  NOT NULL ,
        nom_type_utilisateur Varchar (50) ,
        PRIMARY KEY (id_type_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reservation
#------------------------------------------------------------

CREATE TABLE reservation(
        debut_reservation Datetime ,
        fin_reservation   Datetime ,
        est_facultatif    Boolean ,
        description       Varchar (255) ,
        id_utilisateur    Int (11) NOT NULL ,
        id_salle          Int (11) NOT NULL ,
        PRIMARY KEY (id_utilisateur ,id_salle )
)ENGINE=InnoDB;

ALTER TABLE utilisateur ADD CONSTRAINT FK_utilisateur_id_type_utilisateur FOREIGN KEY (id_type_utilisateur) REFERENCES type_utilisateur(id_type_utilisateur);
ALTER TABLE reservation ADD CONSTRAINT FK_reservation_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur);
ALTER TABLE reservation ADD CONSTRAINT FK_reservation_id_salle FOREIGN KEY (id_salle) REFERENCES salle(id_salle);
