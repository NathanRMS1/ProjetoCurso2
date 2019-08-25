<?php
#origem raiz/partes/adm/verMensagem.php
session_start();
require "conexao.php";
if(isset($_POST['salvar'])){
    $idComm=$_POST['idMsg'];
    $remover=$conectar->query("DELETE FROM mensagens WHERE id=$idComm");
    if($remover){
        echo '<script>alert("Mensagem Removida");</script>';
    }else{
        echo '<script>alert("Mensagem não Removida");</script>';
    }
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}else{
    echo '<script>alert("Erro na remoção da Mensagem!");</script>';
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}