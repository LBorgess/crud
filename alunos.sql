-- CRIAÇÃO DO BANCO DE DADOS
CREATE DATABASE escola CHARACTER SET utf8 COLLATE utf8_general_ci;

-- USO DO BANCO DE DADOS
USE escola;

-- CRIAÇÃO DA TABELA DE ALUNOS
CREATE TABLE alunos(
	id INT NOT NULL auto_increment,
	nome VARCHAR(100),
	email VARCHAR(100),
	idade INT(3),
	PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 DEFAULT COLLATE utf8_unicode_ci;

-- INSERÇÃO DE DADOS DE EXEMPLO
INSERT INTO alunos(nome, email, idade)
VALUES
('João Mario', 'joão@gmail.com', 15),
('Mario Silva', 'mario@gmail.com', 26),
('Luigi Bros', 'game@japan.com', 50),
('Umberto Cor', 'umberto@italian.com', 95);