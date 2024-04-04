drop database orbat;

create database orbat;

use orbat;

CREATE TABLE nivel_acesso (
  id_nivel_acesso int(11) NOT NULL,
  nivel varchar(255) NOT NULL
) ;

INSERT INTO nivel_acesso (id_nivel_acesso, nivel) VALUES
(1, 'Administrador'),
(2, 'Usuario')
;


CREATE TABLE usuarios (
  id_usuario int(11) NOT NULL auto_increment primary key,
  usuario_nome varchar(100),
  usuario_login varchar(25),
  usuario_senha varchar(25),
  id_nivel_acesso int(11)
);

INSERT INTO usuarios  (usuario_nome, usuario_login, usuario_senha, id_nivel_acesso) VALUES
("Administrador","admin","123456", 1);

CREATE TABLE exercicio (
  id_exercicio int(11) NOT NULL auto_increment primary key,
  exercicio varchar(255) NOT NULL,
  data_inicio_exer date NOT NULL,
  data_fim_exer date NOT NULL
);

CREATE TABLE om (
  id_om int(11) NOT NULL auto_increment primary key,
  nome_om varchar(255) NOT NULL,
  data_inserida datetime NOT NULL
);

CREATE TABLE partido (
  id_partido int(11) NOT NULL auto_increment primary key,
  nome_partido varchar(255) NOT NULL,
  cor varchar(255) NOT NULL
);

INSERT INTO partido (id_partido, nome_partido, cor) VALUES
(1, 'Partido Azul', '#0000FF'),
(2, 'Partido Vermelho', '#FF0000'),
(3, 'Direx', '#32CD32');

