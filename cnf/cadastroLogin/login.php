<?php 
#origem raiz/partes/landing_page/acesso.php
session_start();
require '../conexao.php';
if(isset($_POST['salvar'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $filtro=$conectar->query("SELECT * FROM usuario WHERE email='$email' AND senha='$password'");
	if(mysqli_num_rows($filtro) > 0){
        $onibuscarro=$conectar->query("SELECT * FROM usuario WHERE email='$email' && senha='$password'");
        while ($row=$onibuscarro->fetch_assoc()){
            $_SESSION['princdatui']=$row;
        }
    }else{
        echo '<script>alert("Email ou senha incorretos");</script>';
    }
    echo '<meta content="0;../../index.php" http-equiv="refresh">';
}else{
    echo '<script>alert("Email ou senha incorretos");</script>';
    echo '<meta content="0;../../index.php" http-equiv="refresh">';
}
?>