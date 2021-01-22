

CREATE TABLE if not exists comments 
(
  id serial NOT NULL,
  post_id int NOT NULL,
  user_id int NOT NULL,
  message text NOT NULL,
  creation_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE if not exists posts 
(
  id serial NOT NULL,
  user_id int NOT NULL,
  title text NOT NULL,
  message text NOT NULL,
  creation_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE users (
  id serial NOT NULL,
  role_id int NOT NULL DEFAULT 2,
  name varchar(255) NOT NULL,
  mdp varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE roles (
  id serial NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY (id)
);



ALTER TABLE comments
  ADD CONSTRAINT comment_join FOREIGN KEY (post_id) REFERENCES posts (id),
  ADD CONSTRAINT user_join_comment FOREIGN KEY (user_id) REFERENCES users (id);

ALTER TABLE posts
  ADD CONSTRAINT user_join_post FOREIGN KEY (user_id) REFERENCES users (id);

ALTER TABLE users
  ADD CONSTRAINT role_join FOREIGN KEY (role_id) REFERENCES roles (id);




insert into roles (name)
values ('admin'); 
insert into roles (name)
values ('user'); 

insert into users (role_id, name, mdp, email)
values (1, 'admin', '8a30ec6807f71bc69d096d8e4d501ade', 'admin@protonmail.ch'); -- mdp root

insert into users (name, mdp, email)
values ('tutur0001', '4a7d1ed414474e4033ac29ccb8653d9b', 'a.michon@it-students.fr'); -- mdp test1234

insert into posts (user_id, title, message)
values (2, 'Gratin de pennes à la tomate', 'Ingredients:
-500 G DE TOMATES
-1 TIGE DE BASILIC
-200 G DE MOZZARELLA
-500 G DE PENNES
-1 C. À SOUPE D’HUILE D’OLIVE
-SEL ET POIVRE

Preparation: 
1. Cuisez les pennes dans une grande casserole d’eau salée, puis égouttez-les. Ébouillantez les tomates 1 minute, rafraîchissez-les, pelez-les et taillez-les en petits dés. Lavez, séchez et effeuillez le basilic. Coupez la mozzarella en tranches. Réservez.
2. Préchauffez le four à th. 7 – 210 °C. Dans un plat à gratin huilé, disposez une couche de pennes, puis une de tomates, et ainsi de suite en finissant par une couche de pâtes. Recouvrez du fromage, salez et poivrez.
3. Enfournez pour 20 minutes environ, le temps que ce soit bien gratiné. Parsemez de basilic avant de servir.');

insert into posts (user_id, title, message)
values (2, 'Pâtes aux artichauts', 'Ingredients:
-240 G DE PÂTES TYPE FUSILLI RIGATI
-4 ARTICHAUTS POIVRADE
-1 CITRON
-1 BRANCHE DE CÉLERI
-1 TIGE DE BASILIC
-20 G DE RAISINS SECS BLONDS
-10 G DE PIGNONS DE PIN
-6 C. À SOUPE D’HUILE D’OLIVE
-SEL ET POIVRE DU MOULIN

Preparation: 
1. Cassez les tiges des artichauts. Retirez les feuilles dures du tour et coupez les extrémités. Coupez les artichauts en deux. Citronnez-les sur toutes les faces.
2. Chauffez 3 cuillerées à soupe l’huile dans une cocotte. Ajoutez les artichauts, salez, poivrez et versez de l’eau à fleur. Faites cuire à feu doux 40 minutes. Égouttez et laissez refroidir.
3. Cuisez les pâtes al dente dans de l’eau bouillante salée. Égouttez-les et rafraîchissez-les. Lavez, séchez et tronçonnez le céleri. Lavez, séchez et ciselez la moitié des feuilles de basilic.
4. Mettez les pâtes dans un saladier, avec les artichauts, le céleri, les raisins secs et les pignons de pin. Parsemez de basilic ciselé. Arrosez du reste d’huile, salez, poivrez et mélangez. Décorez de feuilles de basilic et servez.');

insert into posts (user_id, title, message)
values (2, 'Wok de boeuf aux légumes', 'Ingredients:
-750  G DE RUMSTECK
-3 CAROTTES
-2 POIREAUX
-3 PETITS OIGNONS BLANCS
-10  CL DE BOUILLON DE LÉGUMES
-2  C. À SOUPE D’HUILE D’ARACHIDE
-SEL ET POIVRE
-SAUCE SOJA

Preparation: 
1. Pelez les carottes et émincez-les dans la longueur. Fendez les poireaux en deux et rincez-les soigneusement en écartant les feuilles. Conservez seulement la partie la plus tendre du vert. Coupez-les en lanières. Pelez les oignons et coupez-les en rondelles. …Émincez le boeuf en lamelles.
2. Faites chauffer l’huile dans un wok et saisissez-y les lamelles de boeuf 1 minute en remuant bien, retirez la viande et réservez.
3. Mettez les légumes dans le wok avec le bouillon et faites cuire 15 minutes. Puis ajoutez les lamelles de viande, arrosez-les de quelques gouttes de soja et poursuivez la cuisson 5 minutes. Servez aussitôt.');
