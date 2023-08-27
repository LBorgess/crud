create database alunos CHARACTER SET utf8 COLLATE utf8_general_ci;

use alunos;

create table alunos(
	id int not null auto_increment,
	nome varchar(100),
	email varchar(100),
	idade int(3),
primary key(id))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;