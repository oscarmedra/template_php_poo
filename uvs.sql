drop database if exists `gmbase`;
create database if not EXISTS `gmbase`;
use `gmbase`;

create table users(
    `id` int primary key auto_increment,
    `name` varchar(60) not null,
    `email` varchar(60) not null,
    `password` varchar(60) not null
)engine=innodb;

create table poles(
    `id` int primary key auto_increment,
    `name` varchar(60) not null unique,
    `slug` varchar(60) not null unique
)engine=innodb;

insert into poles values (null, 'STN', 'stn');
insert into poles values (null, 'SEJA', 'seja');


create table filieres(
    `id` int primary key auto_increment,
    `name` varchar(60) not null unique,
    `slug` varchar(60) not null unique,
    `pole` int not null,
    foreign key(`pole`) references poles(`id`)
)engine=innodb;

insert into filieres values (null, 'MAI', 'mai', 1);
insert into filieres values (null, 'MIC', 'mic', 1);
insert into filieres values(null, 'CD', 'cd', 2);

create table niveaus(
    `id` int primary key auto_increment,
    `name` varchar(60) not null unique
);

insert into  niveaus values(null, 'Licence 1');
insert into  niveaus values(null, 'Licence 2');
insert into  niveaus values(null, 'Licence 3');
insert into  niveaus values(null, 'Master 1');
insert into  niveaus values(null, 'Master 2');

create table options(
    `id` int primary key auto_increment,
    `name` varchar(60) not null unique,
    `filiere` int not null,
    `slug` varchar(60) not null,
    `niveau` int not null,
    foreign key(`filiere`) references filieres(`id`),
    foreign key(`niveau`) references niveaus(`id`)

);

insert into options values (null, 'mathematique', 1, 'mathematique', 1);
insert into options values (null, 'informatique', 1, 'informatique', 3);
insert into options values (null, 'dessins', 2, 'dessins', 1);

create table matieres(
    `id` int primary key auto_increment,
    `name` varchar(60),
    `slug` varchar(60),
    `options` varchar(60) not null
);

insert into matieres VALUES
(null, 'administration windows', 'administration_windows', '-1-2-3'),
(null, 'administration linux', 'administration_linux', '-1-2-3'),
(null, 'architecture des ordinateur', 'architecture_des_ordinateur', '-1-2-3');


create table type_sujet(
    `id` int primary key auto_increment,
    `libelle` varchar(60)
);

insert into type_sujet values 
(null, 'random_subjet'),
(null, 'normal_subjet');

create table sujets(
    `id` int primary key auto_increment,
    `name` varchar(60),
    `type` int not null,
    `matiere` int not null,
    `exercices` varchar(100) default null,
    `created_at` datetime,
    `updated_at` datetime,
    foreign key(`matiere`) references matieres(`id`),
    foreign key(`type`) references type_sujet(`id`)
);


insert into sujets VALUES
(null, 'sujet_examen semestre 1', 1, 1, "-1-2-3-4", null, null),
(null, 'sujet_examen semestre 1', 1, 1, "-1-2-3-4", null, null),
(null, 'sujet_examen semestre 1', 1, 1, "-1-2-3-4", null, null),
(null, 'sujet_examen semestre 1', 1, 1, "-1-2-3-4", null, null);


create table exercices(
    `id` int primary key auto_increment,
    `libelle` varchar(60),
    `questions` varchar(100) default null
);

insert into exercices values 
(null, 'calcul equation', '-1-2-3'),
(null, 'calcul equation', '-1-2-3'),
(null, 'calcul equation', '-1-2-3'),
(null, 'calcul equation', '-1-2-3');


create table type_question(
    `id` int primary key auto_increment,
    `libelle` varchar(60)
);

insert into type_question values 
(null, 'normal'),
(null, 'qcm'),
(null, 'qrm');


create table questions(
    `id` int primary key auto_increment,
    `type` int not null,
    `matiere` int not null,
    `infos` text,
    foreign key(`matiere`) references matieres(`id`),
    foreign key(`type`) references type_question(`id`)
);

insert into questions  values 
(null, 1, 1, "je suis la question n° 1"),
(null, 1, 1, "je suis la question n° 1"),
(null, 1, 1, "je suis la question n° 1"),
(null, 1, 1, "je suis la question n° 1"),
(null, 1, 1, "je suis la question n° 1"),
(null, 1, 1, "je suis la question n° 1"),
(null, 1, 1, "je suis la question n° 1"),
(null, 1, 1, "je suis la question n° 1"),
(null, 1, 1, "je suis la question n° 1");