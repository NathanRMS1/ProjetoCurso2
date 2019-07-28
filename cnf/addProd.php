<?php
require "conexao.php";
session_start();
if(isset($_POST['salvar'])){
    $nome=$_POST['nome'];
    $desc=$_POST['desc'];
    $img=$_POST['img'];
    $insert=$conectar->query("INSERT INTO produtos(nome,descricao,imagem) VALUES('$nome','$desc','$img')");
    if($insert){
        echo '<script>alert("Produto Inserido!");</script>';
    }else{
        echo '<script>alert("Produto não Inserido!");</script>';
    }
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}else{
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}
?>