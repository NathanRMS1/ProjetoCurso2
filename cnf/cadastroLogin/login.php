<?php 
if(isset($_POST['salvar'])){
    require '../conexao.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $onibuscarro=$conectar->query("SELECT * FROM usuario WHERE email='$email' && senha='$password'");
    while ($row=$onibuscarro->fetch_assoc()){
        print_r($row);
        session_start();
        $_SESSION['login']=$row;
        echo $_SESSION['login']['nome'];
    }
}else{
    echo 'deu errado :/';
    echo '<meta content="3;../../index.php" http-equiv="refresh">';
}
?>