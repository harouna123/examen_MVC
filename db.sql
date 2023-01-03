create database gestion_paiement;
use gestion_paiement;

create table classe(
    code_classe int primary key auto_increment,
    nom_classe varchar(255),
    frais_inscription varchar(255),
    mensualite int ,
    frais_tenu int ,
    frais_amicale int 
);

create table caissier(
    id_caisse int primary key auto_increment,
    nom_caisse varchar(255),
    prenom_caisse varchar(255),
    niveau varchar(255)
);

create table etudiant(
    id int primary key auto_increment,
    nom varchar(255),
    prenom varchar(255),
    naissance date ,
    lieu varchar(255),
    diplome varchar(255),
    nom_tuteur varchar(255),
    code_classe int,
    constraint fk_etudiant foreign key (code_classe) references classe(code_classe)

);

create table encaisser(
    id int primary key auto_increment,
    id_caisse int ,
    id_etudiant int,
    date_debut date ,
    date_fin date ,
    heure_encaissement time,
    nom_etudiant varchar(255),
    prenom_etudiant varchar(255),
    nom_tuteur varchar(255),
    constraint fk_caissier foreign key (id_caisse ) references caissier(id_caisse),
    constraint fk_etudiants foreign key (id_etudiant) references etudiant(id)

);

create table user(
    id int primary key auto_increment,
    nom varchar(255) ,
    prenom varchar(255),
    email varchar(255) ,
    passwords varchar(255) 
    
);

create table agent(
    id int primary key auto_increment,
    nom_agent varchar(255),
    salaire int ,
    prime int ,
    commission int 
);