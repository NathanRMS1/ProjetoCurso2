<!DOCTYPE html>
<?php 
require_once 'cnf/conexao.php';
require_once 'cnf/functions.php';
if(isset($_GET['logout'])){
	session_start();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0;index.php">';
    die;
}else{
	session_start();
}
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include_once 'cnf/conexao.php';?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Página Inicial</title>
</head>
<body>
    <div class="container-fluid bg-dark"><!-- menu do topo -->
        <?php include_once 'partes/landing_page/topo.php';?> 
        <section class="content text-white bg-transparent"><!-- banners -->
            <?php include_once 'partes/landing_page/carousel.php';?><!-- Região das comidas -->
            <?php include_once 'partes/landing_page/produtos.php';?> <!-- Fale Conosco -->
            <?php include_once 'partes/landing_page/contato.php';?> <!-- login e cadastro -->
            <?php include_once 'partes/landing_page/acesso.php';?>
            <?php if(isset($_SESSION['princdatui']['nome'])){if(($_SESSION['princdatui']['nivel'])!=0){include_once 'partes/adm/addProduto.php';}}?><!-- sobre nós -->
            <?php include_once 'partes/landing_page/about.php';?>
        </section>
    </div>
</body>
</html>