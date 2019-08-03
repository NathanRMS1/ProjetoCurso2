<?php
#origem raiz/partes/landing_page/acesso.php
session_start();
require "../conexao.php";
if(isset($_POST['salvar'])){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $filtroQr="SELECT * FROM usuario WHERE email='$email'";
    $filtro=$conectar->query($filtroQr);
    if(mysqli_num_rows($filtro)>0){
            ?>
    <script>alert("Este e-mail já existe!");</script>
    <meta http-equiv="refresh" content="0;../../index.php">
            <?php 
    }else{
        $insert= $conectar->query("INSERT INTO usuario(nome, email, senha, nivel) VALUES('$nome','$email','$password','0')");
        if ($insert){
            $onibuscarro=$conectar->query("SELECT * FROM usuario WHERE email='$email' && senha='$password'");
            while ($row=$onibuscarro->fetch_assoc()){
                $_SESSION['princdatui']=$row;
            }
            echo '<meta content="0;../../index.php" http-equiv="refresh">';
            echo '<script>alert("Bem vindo ao site!");</script>';
        }else{
            echo '<script>alert("tente novamente mais tarde");</script>';
            echo '<meta content="0;../../index.php" http-equiv="refresh">';
        }
    }
}else{
    echo 'ué';
    echo '<meta content="3;../../index.php" http-equiv="refresh">';
}

?>
