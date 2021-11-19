CREATE DATABASE authworld;

USE authworld;

CREATE TABLE usuarios(
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_usuario VARCHAR(50) NOT NULL,
  email_usuario VARCHAR(50) NOT NULL,
  senha_usuario VARCHAR(50) NOT NULL
);