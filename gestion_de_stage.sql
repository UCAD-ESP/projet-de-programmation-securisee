
SET NAMES utf8mb4;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';





DROP DATABASE IF EXISTS gestion_de_stage;

CREATE DATABASE gestion_de_stage;

USE gestion_de_stage;


CREATE TABLE utilisateur(
	Id_utilisateur int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Matricule_personnel int(2),
	Login varchar(50),
	Role varchar(20),
	Mot_de_passe varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- CREATE TABLE administrateur(
-- 	Id_administrateur int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
-- 	Login varchar(50),
-- 	Mot_de_passe varchar(50)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE etablissement(
	Id_etablissement int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Nom varchar(50),
	Telephone int(2),
	Email varchar(50),
	Adresse varchar(50),
	BP varchar(50),
	Ville varchar(50),
	Pays varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE fonction(
	Id_fonction int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Code int(2),
	Nom varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE bureau(
	Id_bureau int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Code int(2),
	Nom varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE personnel(
	Id_personnel int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Id_bureau int(2),
	Id_fonction int(2),
	Matricule_personnel int(2),
	Date_debut_affectation date,
	Date_fin_affectation date,
	Nom varchar(50),
	Prenom varchar(50),
	Telephone int(2),
	Adresse varchar(50),
	Email varchar(50),
	CONSTRAINT fk_bureau_personnel FOREIGN KEY(Id_bureau) REFERENCES bureau(Id_bureau) ON DELETE SET NULL ON UPDATE CASCADE,
	CONSTRAINT fk_fonction_personnel FOREIGN KEY(Id_fonction) REFERENCES fonction(Id_fonction) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE demande(
	Id_demande int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Id_etablissement int(2),
	Id_utilisateur int(2),
	Niveau varchar(50),
	Domaine varchar(50),
	Nom_demandeur varchar(50),
	Prenom_demandeur varchar(50),
	Adresse varchar(50),
	Date_naissance date,
	Lieu_naissance varchar(50),
	Telephone int(2),
	Email varchar(50),
	Decision ENUM('Accepter', 'Attente', 'Rejeter'),
	-- CONSTRAINT `fk_address_city` FOREIGN KEY (city_id) REFERENCES city (city_id) ON DELETE RESTRICT ON UPDATE CASCADE
	CONSTRAINT fk_etablissement_demande FOREIGN KEY(Id_etablissement) REFERENCES etablissement(Id_etablissement) ON DELETE SET NULL ON UPDATE CASCADE,
	CONSTRAINT fk_utilisateur_demande FOREIGN KEY(Id_utilisateur) REFERENCES utilisateur(Id_utilisateur) ON DELETE SET NULL ON UPDATE CASCADE
	-- CREATE TABLE shirts (
 --    name VARCHAR(40),
 --    size ENUM('x-small', 'small', 'medium', 'large', 'x-large')
	-- );
	-- INSERT INTO shirts (name, size) VALUES ('dress shirt','large'), ('t-shirt','medium'),
	--   ('polo shirt','small');
	-- SELECT name, size FROM shirts WHERE size = 'medium';
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





CREATE TABLE stage(
	Id_stage int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Id_demande int(2),
	Id_personnel int(2),
	Id_utilisateur int(2),
	Nom_stage varchar(50),
	Niveau_stage varchar(50),
	Sujet_stage text,

	Convention_nom varchar(50),
	Convention BLOB,
	Duree varchar(50),/*Mois*/
	Date_debut date,
	Date_fin date,
	Rapport text,
	Note varchar(50),
	Appreciations text,
	Observation text,
	-- Travail ENUM('analyse', 'conception', 'realisation', 'maintenance'),
	Travail text, /*analyse, conception, realisation, maintenance*/
	Evaluation text,/*'connaissances théoriques de l'étudiant', 'capacités pratiques de l'étudiant',  'aptitudes  l'organisation', 'connaissance des problème de l'entreprise', 'spécialisation'*/
	Sociabilité text,/*'Relation avec les autres membres du personnel', 'intégration au milieu du travail', 'dynamisme et autonomie'*/
	Satisfait ENUM('Oui', 'Non'),
	Jugement_formation ENUM('trop théorique', 'trop pratique', 'trop spécialisée', 'trop générale', 'obsolète', 'trop avancée', 'conforme à nos besoins'),
	CONSTRAINT fk_demande_stage FOREIGN KEY(Id_demande) REFERENCES demande(Id_demande) ON DELETE SET NULL ON UPDATE CASCADE,
	CONSTRAINT fk_personnel_stage FOREIGN KEY(Id_personnel) REFERENCES personnel(Id_personnel) ON DELETE SET NULL ON UPDATE CASCADE,
	CONSTRAINT fk_utilisateur_stage FOREIGN KEY(Id_utilisateur) REFERENCES utilisateur(Id_utilisateur) ON DELETE SET NULL ON UPDATE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






-- INSERT INTO administrateur (Login, Mot_de_passe) VALUES 
-- 	('admin', 'admin');





CREATE TABLE evenement(
	Id_evenement int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Matricule_personnel int(2),
	Id_utilisateur int(2),
	Titre varchar(50),
	Description text,
	Date_debut datetime,
	Date_fin datetime,
	CONSTRAINT fk_utilisateur_evenement FOREIGN KEY(Id_utilisateur) REFERENCES utilisateur(Id_utilisateur) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE planning(
	Id_planning int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Matricule_personnel int(2),
	Id_utilisateur int(2),
	Titre varchar(50),
	Tache text,
	Date_debut datetime,
	Date_fin datetime,
	CONSTRAINT fk_utilisateur_planning FOREIGN KEY(Id_utilisateur) REFERENCES utilisateur(Id_utilisateur) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `bureau` (`Id_bureau`, `Code`, `Nom`) VALUES
(1, 1, 'Bureau des Etudes et du Développement'),
(2, 2, 'Bureau Informatique et Production'),
(3, 3, 'Bureau administratif et financier'),
(4, 4, 'Bureau d\'Analyse et d\'Aide à la Décision'),
(5, 5, 'Bureau de la Comptabilité et des Statistiques');

INSERT INTO `fonction` (`Id_fonction`, `Code`, `Nom`) VALUES
(1, 123, 'Fonction 001'),
(2, 124, 'Fonction 002'),
(3, 125, 'Fonction 003'),
(4, 126, 'Fonction 004'),
(5, 127, 'Fonction 005');


INSERT INTO `personnel` (`Id_personnel`, `Id_bureau`, `Id_fonction`, `Matricule_personnel`, `Date_debut_affectation`, `Date_fin_affectation`, `Nom`, `Prenom`, `Telephone`, `Adresse`, `Email`) VALUES
(1, 3, 1, 1234, '2024-04-01', '2024-04-10', 'nom 1', 'prenom 1', 778889955, 'address', 'email@email.com'),
(2, 1, 2, 2345, '2024-04-01', '2024-04-10', 'nom 2', 'prenom 2', 778889966, 'address', 'email@email.com'),
(3, 4, 3, 3456, '2024-04-01', '2024-04-10', 'nom 3', 'prenom 3', 778889977, 'address', 'email@email.com');

INSERT INTO `utilisateur` (`Id_utilisateur`, `Matricule_personnel`, `Login`, `Role`, `Mot_de_passe`) 
VALUES 
('111', '2345', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');



INSERT INTO `etablissement` (`Id_etablissement`, `Nom`, `Telephone`, `Email`, `Adresse`, `BP`, `Ville`, `Pays`) VALUES ('1', 'ESP', '338001122', 'esp@email.com', 'Fann', 'bp 5522', 'Dakar', 'Senegal');




INSERT INTO `demande` (`Id_demande`, `Id_etablissement`, `Id_utilisateur`, `Niveau`, `Domaine`, `Nom_demandeur`, `Prenom_demandeur`, `Adresse`, `Date_naissance`, `Lieu_naissance`, `Telephone`, `Email`, `Decision`) VALUES
(1, 1, 111, 'mastere 1', 'informatique', 'Ibrahima', 'diagne', 'amitie 2', '1999-04-14', 'Dakar', 775211787, 'ibrahima@email.com', 'Attente'),
(2, 1, 111, 'mastere 2', 'informatique', 'Baba', 'keke', 'amitie 1', '1999-04-14', 'Dakar', 885211787, 'baba@email.com', 'Attente'),
(3, 1, 111, 'mastere 2', 'informatique', 'Mouhamed', 'diop', 'amitie 1', '1999-04-14', 'Dakar', 995211787, 'mouhamed@email.com', 'Attente');


-- CREATE TABLE Matiere (
-- 	reference int NOT NULL,
-- 	nom varchar(20),
-- 	coeff int,
-- 	PRIMARY KEY (reference)
-- ) ENGINE = InnoDB;
