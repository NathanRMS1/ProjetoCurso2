<?php 
#origem raiz/partes;landing_page/contato.php
session_start();
require 'conexao.php';
if(isset($_POST['salvar'])){
    if(isset($_SESSION['princdatui']['id'])){$idUser=$_SESSION['princdatui']['id'];}else{$idUser=0;}
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $tel=$_POST['telefone'];
    $msg=$_POST['mensagem'];
    $insert= $conectar->query("INSERT INTO mensagens(idUser,nome,email,tel,mensagem) VALUES('$idUser','$nome','$email','$tel','$msg')");
    if ($insert){
        echo '<script>alert("Mensagem enviada");</script>';
    }else{
        echo '<script>alert("Mensagem não enviada");</script>';
    }
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}else{
    echo '<script>alert("Erro!");</script>';
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}