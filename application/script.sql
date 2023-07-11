create table genre(
    idGenre int primary key,
    libele varchar(10),
    fatrany double precision,
    physique double precision
);

-- alter table genre
-- add fatrany double precision default 450;

-- alter table genre
-- add physique double precision default 100;

insert into genre values(1,'Masculin');
insert into genre values(2,'Feminin');

create table Allergie(
    idAllergie serial primary key,
    libele varchar(50)
);  

create table maladie(
    idMaladie serial primary key,
    libele varchar(50)
);

create table Objectif(
    idObjectif serial primary key,
    libele varchar(25)
);

create table personne(
    idpersonne serial primary key,
    taille int,
    idGenre int,
    foreign key (idGenre) references genre(idGenre)
);

create table utilisateur(
    idUser serial primary key,
    username varchar(15),
    mail varchar(30),
    motpasse varchar(10),
    daty date,
    idpersonne int,
    dateAdhesion timestamp,
    foreign key (idpersonne) references personne(idpersonne)
);

create table personnePoids(
    idPersonnePoids serial primary key,
    idPersonne int,
    poids double precision,
    daty timestamp,
    foreign key (idpersonne) references personne(idpersonne)
);



-- alter table allergie
-- alter column libele type varchar(50);

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

create table prevision(
    idPrevision serial primary key,
    idPersonne int,
    idObjectif int,
    poidsIdeal double precision,
    habitudeSport double precision,
    vitesse int,
    repasJournaliere int ,
    argent varchar(3),
    daty timestamp,
    foreign key (idpersonne) references personne(idpersonne),
    foreign key (idObjectif) references objectif(idObjectif)
);

create table repas(
    idRepas serial primary key,
    libele varchar(50)
);

create table typeAliment(
    idTypeAliment serial primary key,
    libele varchar(50)
);

CREATE TABLE Aliments (
  idAliments SERIAL PRIMARY KEY,
  libele VARCHAR(255) NOT NULL,
  calories double precision NOT NULL,
  idTypeAliment int,
  foreign key (idTypeAliment) references typeAliment(idTypeAliment)
);

CREATE TABLE PLAT(
    idPlat serial primary key,
    libele varchar(100),
    idRepas int,
    foreign key (idRepas) references repas(idRepas)
);

create table regime(
    idregime serial primary key,
    libele varchar(80),
    descriptions text
);

create table compositionPlat(
    idCompositionPlat serial primary key,
    idPlat int,
    idAliments int,
    pourcentage double precision,
    foreign key (idplat) references plat(idplat),
    foreign key (idAliments) references Aliments(idAliments)
);

create table platRegime(
    idplatregime serial primary key,
    idplat int,
    idRegime int,
    foreign key (idplat) references plat(idplat),
    foreign key (idRegime) references regime(idregime)
);

create table sakafomaladie(
    idSakafomaladie serial primary key,
    idTypeAliment int,
    idMaladie int,
    foreign key (idTypeAliment) references typeAliment(idTypeAliment),
    foreign key (idMaladie) references maladie(idMaladie)
);

create table sakafoallergie(
    idSakafoallergie serial primary key,
    idTypeAliment int,
    idAllergie int,
    foreign key (idTypeAliment) references typeAliment(idTypeAliment),
    foreign key (idAllergie) references allergie(idAllergie)
);



Alter table utilisateur
add dateAdhesion timestamp;

insert into utilisateur values (default,'Jeremia','hasina20.jeremia@gmail.com','qwerty123','2004-05-20',now());



-- Insertion des données dans la table "Allergie"
INSERT INTO Allergie (libele)
VALUES ('vegetarien');

INSERT INTO Allergie (libele)
VALUES ('intolerance au lactose');

INSERT INTO Allergie (libele)
VALUES ('gluten');

INSERT INTO Allergie (libele)
VALUES ('alergie fruit de mer');





















-- Insertion des repas
INSERT INTO repas (idRepas, libele) VALUES
    (1, 'Déjeuner'),
    (2, 'Dîner'),
    (3, 'Petit-déjeuner'),
    (4, 'Collation');

-- Insertion des types d'aliments
INSERT INTO typeAliment (idTypeAliment, libele) VALUES
    (1, 'Produit laitier'),
    (2, 'Fruit'),
    (3, 'Protéine'),
    (4, 'Graisse saine'),
    (5, 'Légume'),
    (6, 'Condiment'),
    (7, 'Poisson'),
    (8, 'Grain'),
    (9, 'Viande maigre'),
    (10, 'Légumineuse'),
    (11, 'Sucre');

-- Insertion des aliments
INSERT INTO Aliments (idAliments, libele, calories, idTypeAliment) VALUES
    (1, 'Tomates', 18, 5),
    (2, 'Concombres', 15, 5),
    (3, 'Oignons rouges', 40, 5),
    (4, 'Olives kalamata', 115, 4),
    (5, 'Feta', 264, 1),
    (6, 'Blanc de poulet', 165, 9),
    (7, 'Courgettes', 17, 5),
    (8, 'Poivrons', 20, 5),
    (9, 'Huile d''olive', 884, 4),
    (10, 'Poisson', 150, 7),
    (11, 'Couscous', 120, 8),
    (12, 'Œufs', 155, 3),
    (13, 'Roquette', 25, 5),
    (14, 'Avocat', 160, 4),
    (15, 'Laitue', 14, 5),
    (16, 'Dinde', 104, 9),
    (17, 'Tomates', 18, 5),
    (18, 'Moutarde', 66, 6),
    (19, 'Légumes', 20, 5),
    (20, 'Haricots blancs', 337, 10),
    (21, 'Thon', 184, 7),
    (22, 'Céleri', 16, 5),
    (23, 'Vinaigrette légère', 14, 6),
    (24, 'Yaourt grec', 146, 1),
    (25, 'Lait d''amande', 20, 1),
    (26, 'Fruits', 130, 2),
    (27, 'Protéines en poudre', 250, 3),
    (28, 'Noix', 310, 4),
    (29, 'Graines', 300, 4),
    (30, 'Fromage', 350, 1),
    (31, 'Pain', 50, 8),
    (32, 'Beurre de cacahuète', 588, 4),
    (33, 'Steak de bœuf', 250, 9),
    (34, 'Quinoa', 120, 8),
    (35, 'Saumon', 206, 7),
    (36, 'Amandes effilées', 580, 4);

-- Insertion des plats
INSERT INTO PLAT (idPlat, libele, idRepas) VALUES
    -- Régime méditerranéen
    (1, 'Salade grecque', 1),
    (2, 'Poulet grillé avec légumes rôtis', 2),
    (3, 'Poisson grillé avec couscous aux légumes', 2),
    -- Régime pauvre en glucides
    (4, 'Œufs brouillés avec des légumes', 3),
    (5, 'Steak de thon grillé avec salade de roquette et d''avocat', 1),
    (6, 'Roulés de laitue au poulet et aux légumes', 1),
    -- Régime hypocalorique
    (7, 'Wrap de dinde avec laitue, tomates et moutarde', 2),
    (8, 'Soupe aux légumes avec haricots blancs', 2),
    (9, 'Salade de thon avec laitue, céleri et vinaigrette légère', 1),
    -- Régime hypercalorique
    (10, 'Smoothie protéiné aux fruits avec du lait d''amande', 3),
    (11, 'Omelette aux œufs et au fromage avec des toasts et du beurre de cacahuète', 3),
    (12, 'Poulet rôti avec patates douces et légumes rôtis', 2),
    -- Régime riche en protéines
    (13, 'Steak de bœuf grillé avec des légumes sautés et des patates douces', 2),
    (14, 'Salade de poulet avec quinoa, légumes et vinaigrette à base d''huile d''olive', 1),
    (15, 'Œufs brouillés avec des légumes et du fromage', 3),
    -- Régime riche en graisses saines
    (16, 'Saumon grillé avec une salade d''avocat et de tomates', 2),
    (17, 'Poulet rôti avec des légumes rôtis et des amandes effilées', 2),
    (18, 'Œufs brouillés avec des légumes sautés à l''huile d''olive', 3);

-- Insertion des compositions de plat
INSERT INTO compositionPlat (idCompositionPlat, idPlat, idAliments, pourcentage) VALUES
    -- Salade grecque
    (1, 1, 1, 20),
    (2, 1, 2, 20),
    (3, 1, 3, 10),
    (4, 1, 4, 15),
    (5, 1, 5, 35),
    -- Poulet grillé avec légumes rôtis
    (6, 2, 6, 40),
    (7, 2, 7, 20),
    (8, 2, 8, 15),
    (9, 2, 9, 25),
    -- Poisson grillé avec couscous aux légumes
    (10, 3, 10, 30),
    (11, 3, 11, 46),
    (12, 3, 9, 24),
    -- Œufs brouillés avec des légumes
    (13, 4, 12, 30),
    (14, 4, 19, 70),
    -- Steak de thon grillé avec salade de roquette et d'avocat
    (15, 5, 21, 30),
    (16, 5, 13, 20),
    (17, 5, 14, 25),
    -- Roulés de laitue au poulet et aux légumes
    (18, 6, 6, 40),
    (19, 6, 15, 30),
    (20, 6, 19, 30),
    -- Wrap de dinde avec laitue, tomates et moutarde
    (21, 7, 16, 30),
    (22, 7, 15, 30),
    (23, 7, 17, 20),
    (24, 7, 18, 20),
    -- Soupe aux légumes avec haricots blancs
    (25, 8, 19, 70),
    (26, 8, 20, 30),
    -- Salade de thon avec laitue, céleri et vinaigrette légère
    (27, 9, 21, 30),
    (28, 9, 15, 30),
    (29, 9, 22, 20),
    (30, 9, 23, 20),
    -- Smoothie protéiné aux fruits avec du lait d'amande
    (31, 10, 25, 30),
    (32, 10, 26, 40),
    (33, 10, 27, 10),
    (34, 10, 28, 10),
    (35, 10, 29, 10),
    -- Omelette aux œufs et au fromage avec des toasts et du beurre de cacahuète
    (36, 11, 12, 30),
    (37, 11, 30, 20),
    (38, 11, 31, 30),
    (39, 11, 32, 20),
    -- Poulet rôti avec patates douces et légumes rôtis
    (40, 12, 6, 40),
    (41, 12, 33, 30),
    (42, 12, 19, 30),
    -- Steak de bœuf grillé avec des légumes sautés et des patates douces
    (43, 13, 33, 40),
    (44, 13, 7, 30),
    (45, 13, 33, 30),
    -- Salade de poulet avec quinoa, légumes et vinaigrette à base d'huile d'olive
    (46, 14, 6, 40),
    (47, 14, 34, 30),
    (48, 14, 19, 20),
    (49, 14, 9, 10),
    -- Œufs brouillés avec des légumes et du fromage
    (50, 15, 12, 30),
    (51, 15, 19, 40),
    (52, 15, 30, 20),
    -- Saumon grillé avec une salade d'avocat et de tomates
    (53, 16, 35, 40),
    (54, 16, 14, 30),
    (55, 16, 17, 20),
    -- Poulet rôti avec des légumes rôtis et des amandes effilées
    (56, 17, 6, 40),
    (57, 17, 19, 30),
    (58, 17, 36, 30),
    -- Œufs brouillés avec des légumes sautés à l'huile d'olive
    (59, 18, 12, 30),
    (60, 18, 19, 40),
    (61, 18, 9, 10);

INSERT INTO regime (libele, descriptions) VALUES
    ('Régime méditerranéen', 'Description du régime méditerranéen'),
    ('Régime pauvre en glucides', 'Description du régime pauvre en glucides'),
    ('Régime hypocalorique', 'Description du régime hypocalorique'),
    ('Régime hypercalorique', 'Description du régime hypercalorique'),
    ('Régime riche en protéines', 'Description du régime riche en protéines'),
    ('Régime riche en graisses saines', 'Description du régime riche en graisses saines');
-- Insertion des associations plat-regime
INSERT INTO platRegime (idplat, idRegime) VALUES
    -- Régime méditerranéen
    (1, 1),
    (2, 1),
    (3, 1),
    -- Régime pauvre en glucides
    (4, 2),
    (5, 2),
    (6, 2),
    -- Régime hypocalorique
    (7, 3),
    (8, 3),
    (9, 3),
    -- Régime hypercalorique
    (10, 4),
    (11, 4),
    (12, 4),
    -- Régime riche en protéines
    (13, 5),
    (14, 5),
    (15, 5),
    -- Régime riche en graisses saines
    (16, 6),
    (17, 6),
    (18, 6);


create view v_personnepoids as (
    select per.idpersonne,per.poids from personnepoids as per join 
    (select idpersonne,max(idPersonnePoids) as idpersonnepoids from personnepoids group by idpersonne) as p
    on per.idpersonnepoids = p.idpersonnepoids
);


select iduser,per.idpersonne,taille,idgenre from utilisateur as u join personne per on u.idpersonne = per.idpersonne;
select idpersonne,max(idprevision) as idprevision from prevision group by idpersonne;

select * from maladiepersonne;


select p1.*,p2.idprevision,vp.poids from v_personnepoids as vp
join (select iduser,per.idpersonne,taille,idgenre from utilisateur as u join personne per on u.idpersonne = per.idpersonne) as p1
on vp.idpersonne = p1.idpersonne
join (select idpersonne,max(idprevision) as idprevision from prevision group by idpersonne) as p2
on p2.idpersonne = vp.idpersonne



create view regime_fady as(

select distinct(idregime) as idregime,idpersonne from 
(select * from (
select distinct(r.idregime) as idregime,m.idpersonne from maladiePersonne as m join
(select idpersonne,max(nombre) as nombre from maladiepersonne group by idpersonne) as j
on j.idpersonne = m.idpersonne and m.nombre = j.nombre
join sakafomaladie s on s.idmaladie = m.idmaladie
join aliments a on a.idTypeAliment = s.idTypeAliment
join compositionPlat c on c.idAliments = a.idAliments
join plat p  on p.idplat = c.idplat
join platRegime pr on pr.idplat = p.idplat
join regime r on r.idregime = pr.idregime
group by m.idpersonne,r.idregime
) as v
union
(select distinct(r.idregime) as idregime,m.idpersonne from allergiePersonne as m join
(select idpersonne,max(nombre) as nombre from allergiepersonne group by idpersonne) as j
on j.idpersonne = m.idpersonne and m.nombre = j.nombre
join sakafoallergie s on s.idallergie = m.idallergie
join aliments a on a.idTypeAliment = s.idTypeAliment
join compositionPlat c on c.idAliments = a.idAliments
join plat p  on p.idplat = c.idplat
join platRegime pr on pr.idplat = p.idplat
join regime r on r.idregime = pr.idregime
group by m.idpersonne,r.idregime)) as v group by v.idregime,v.idpersonne );

select v.iduser,v.idpersonne,r.idregime from regime r cross join 
(select iduser,u.idpersonne,idregime from regime_fady r right join utilisateur u on u.idpersonne = r.idpersonne) v
where v.idregime!=r.idregime;