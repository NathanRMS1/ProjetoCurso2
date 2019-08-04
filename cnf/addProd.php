<?php
#origem raiz/index.php
session_start();
require "conexao.php";
date_default_timezone_set('America/Sao_Paulo');
if(isset($_POST['salvar'])){
    $arquivo = $_FILES['imagem'];
    $tiposPermitidos = array('image/jpg','image/jpeg','image/pjpeg','image/png');
    $extensaoArquivos = ($arquivo['type'] == 'image/png' ? '.png' : '.jpg');
    $tamanhoMax = 1024*1024*8;
    if($arquivo['size'] > $tamanhoMax){
        echo '<script>alert("O arquivo é muito grande, escolha outro");</script>';
    }else if(!in_array($arquivo['type'],$tiposPermitidos)){
        echo '<script>alert("Tipo de arquivo não permitido, selecione uma imagem");</script>';
    }else{
        $nomeArquivo = date("d-m-YH-i-s").$arquivo['name'];
        if(move_uploaded_file($arquivo['tmp_name'] , '../img/produtos/' . $nomeArquivo)){
            $img=$nomeArquivo;
            $nome=$_POST['nome'];
            $desc=$_POST['desc'];
            $insert=$conectar->query("INSERT INTO produtos(nome,descricao,imagem) VALUES('$nome','$desc','$img')");
            if($insert){
                echo '<script>alert("Produto Inserido!");</script>';
            }else{
                echo '<script>alert("Produto não Inserido!");</script>';
            }
        }
    }
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}else{
    echo '<script>alert("Erro em cnfProd.php!");</script>';
    echo '<meta content="0;../index.php" http-equiv="refresh">';
}
?>