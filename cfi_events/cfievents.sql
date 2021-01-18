drop database if exists cfievents ; 
create database cfievents ;

use cfievents; 

create table porte (
	idporte int(3) not null auto_increment, 
	designation varchar(100), 
	dateporte date, 
	heuredebut time, 
	heurefin time, 
	lieu varchar(50), 
	primary key (idporte)
);

create table candidat (
	idcandidat int(3) not null auto_increment, 
	nom varchar(50), 
	prenom varchar(50), 
	adresse varchar(50), 
	email varchar(50), 
	tel varchar(20), );

	diplome varchar(50), 
	primary key(idcandidat)

create table inscription (
	idinscription int(3) not null auto_increment, 
	commentaire text, 
	dateinscription date ,
	idporte int(3) not null, 
	idcandidat int(3) not null, 
	primary key (idinscription), 
	foreign key (idporte) references porte(idporte), 
	foreign key (idcandidat) references candidat(idcandidat)
);