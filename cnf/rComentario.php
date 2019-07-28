<?php
#origem raiz/partes/landing_page/modal/corpo.php
session_start();
require "conexao.php";
if(isset($_POST['salvar'])){
    $idComm=$_POST['idComen'];
    $remover=$conectar->query("DELETE FROM comentario WHERE id=$idComm");
    if($remover){
        echo '<script>alert("Comentário Removido");</script>';
        echo '<meta content="0;../index.php" http-equiv="refresh">';
    }else{
        echo '<script>alert("Comentário não Removido");</script>';
        echo '<meta content="0;../index.php" http-equiv="refresh">';
    }
}else{
    echo '<script>alert("Erro na remoção do comentário!");</script>';
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}