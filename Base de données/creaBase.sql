DROP TABLE IF EXISTS UTILISATEURS;
DROP TABLE IF EXISTS QCM;
DROP TABLE IF EXISTS QUESTIONS;
DROP TABLE IF EXISTS REPONSES;
DROP TABLE IF EXISTS JOUER;


CREATE TABLE UTILISATEURS
(
idUser VARCHAR(3),
mdp VARCHAR(20),
avatar VARCHAR(20),
mail VARCHAR(50),
scoreTotal INT(5),
PRIMARY KEY (idUser)  
)Engine=InnoDB;
   

CREATE TABLE QCM
(
idQcm INT(3),
temps INT(10),
bonus INT(3),
valider BOOLEAN,
PRIMARY KEY (idQcm)  
)Engine=InnoDB;


CREATE TABLE REPONSES
(
idReponse INT (3),
reponse VARCHAR(500),
PRIMARY KEY (idReponse)  
)Engine=InnoDB;


CREATE TABLE QUESTIONS
(
idQuestion INT(3),
idQcm INT(3),
question VARCHAR(500),
idReponse INT (3),
conteur INT (2),
scoreQcm INT (2),
url VARCHAR (100),
PRIMARY KEY (idQuestion),
FOREIGN KEY (idQcm) REFERENCES QCM (idQcm),
FOREIGN KEY (idReponse) REFERENCES REPONSES (idReponse)
)Engine=InnoDB;


CREATE TABLE JOUER
(
idUser VARCHAR(3),
idQcm INT(3),
nbEssais INT(3),
scoreQcm INT(2),
valider BOOLEAN,
PRIMARY KEY (idUser, idQcm),
FOREIGN KEY (idUser) REFERENCES UTILISATEURS (idUser),
FOREIGN KEY (idQcm) REFERENCES QCM (idQcm)
)Engine=InnoDB;
