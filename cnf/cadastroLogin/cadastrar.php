<?php
if(isset($_POST['salvar'])){
    require "../conexao.php";
#include "conexao.php";
#if(!isset($_POST['salvar']))   !===NOT
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insert= $conectar->query("INSERT INTO usuario(nome, email, senha) VALUES('$nome','$email','$password')");
    if ($insert){
        echo "it works!!!";
    }else{
        echo 'tente novamente mais tarde';
    }
}else{
    echo 'deu errado :/';
    echo '<meta content="3;../../index.php" http-equiv="refresh">';
}

?>
