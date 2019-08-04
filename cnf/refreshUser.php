<?php 
if(isset($_SESSION['princdatui'])){
    $id=$_SESSION['princdatui']['id'];
    $onibuscarro=$conectar->query("SELECT * FROM usuario WHERE id='$id'");
    while ($row=$onibuscarro->fetch_assoc()){
        $_SESSION['princdatui']=$row;
    }
}