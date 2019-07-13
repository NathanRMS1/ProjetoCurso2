CREATE DATABASE princesinha DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
USE princesinha;
CREATE TABLE produtos(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255),
    descricao varchar(255),
    imagem varchar(255)
)ENGINE INNODB;
CREATE TABLE usuario(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255),
    email varchar(255),
    senha varchar(255)
)ENGINE INNODB;