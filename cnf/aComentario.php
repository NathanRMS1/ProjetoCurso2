<?php
#origem raiz/partes/landing_page/modal/corpo.php
session_start();
require "conexao.php";
if(isset($_POST['salvar'])){
    $idP=(int)$_POST['idProduto'];
    $idU=(int)$_SESSION['princdatui']['id'];
    $comentario=$_POST['comment'];
    $comentario=preg_replace('/[\r\n]{1,}/','<br>',$comentario);
    $insert=$conectar->query("INSERT INTO comentario(idProduto,idUser,comentario) VALUES('$idP','$idU','$comentario')");
    if($insert){
        echo '<script>alert("Comentário adicionado");</script>';
    }else{
        echo gettype($idP); echo "<br>";
        echo gettype($idU); echo "<br>";
        echo gettype($comentario);
        echo '<script>alert("Comentário não adicionado");</script>';
    }
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}else{
    echo '<script>alert("Erro!");</script>';
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}
?>