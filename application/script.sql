create table utilisateur(
    idUser serial primary key,
    username varchar(15),
    mail varchar(30),
    motpasse varchar(10),
    daty date,
    dateAdhesion timestamp,
    idpersonne int,
    foreign key (idpersonne) references personne(idpersonne)
);

create table genre(
    idGenre int primary key,
    libele varchar(10),
);

create table personne(
    idpersonne serial primary key,
    taille int,
    genre varchar(1)
);

create table Allergie(
    idAllergie serial primary key,
    libele varchar(50),
    descriptions text
);  

alter table allergie
alter column libele type varchar(50);

create table maladie(
    idMaladie serial primary key,
    libele varchar(50)
);

create table personnePoids(
    idPersonnePoids serial primary key,
    idPersonne int,
    poids double precision,
    daty timestamp,
    foreign key (idpersonne) references personne(idpersonne)
);

create table maladiePersonne(
    idMaladiePersonne serial primary key,
    idPersonne int,
    idMaladie int,
    nombre int,
    daty timestamp,
    foreign key (idpersonne) references personne(idpersonne),
    foreign key (idMaladie) references maladie(idMaladie)
);

create table allergiePersonne(
    idAllergiePersonne serial primary key,
    idPersonne int,
    idAllergie int,
    nombre int,
    daty timestamp,
    foreign key (idpersonne) references personne(idpersonne),
    foreign key (idAllergie) references Allergie(idAllergie)
);

create table Objectif(
    idObjectif serial primary key,
    libele varchar(25)
);


CREATE TABLE Aliments (
  idAliments SERIAL PRIMARY KEY,
  libele VARCHAR(255) NOT NULL,
  calories double precision NOT NULL
);


create table repas(
    idRepas serial primary key,
    libele varchar(50)
);


create table prevision(
    idPrevision serial primary key,
    idPersonne int,
    idObjectif int,
    poidsIdeal double precision,
    habitudeSport double precision,
    vitesse int,
    repasJournaliere int ,
    daty timestamp,
    foreign key (idpersonne) references personne(idpersonne),
    foreign key (idObjectif) references objectif(idObjectif)
);


Alter table utilisateur
add dateAdhesion timestamp;

insert into utilisateur values (default,'Jeremia','hasina20.jeremia@gmail.com','qwerty123','2004-05-20',now());