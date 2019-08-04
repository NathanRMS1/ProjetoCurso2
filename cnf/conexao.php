<?php
$host="localhost";
$user="root";
$pass="";
$bancoDeDados="princesinha";
$conectar= new mysqli($host,$user,$pass,$bancoDeDados);
/*
BANCO DE DADOS:
CREATE DATABASE s16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci ENGINE=INNODB;
USE s16;
CREATE TABLE usuario(id int(11) PRIMARY KEY AUTO_INCREMENT,nome varchar(255),email varchar(255),senha varchar(255))ENGINE INNODB;
*/
?>