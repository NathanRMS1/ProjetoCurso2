<!DOCTYPE html>
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
    <div class="container-fluid bg-primary"><!-- menu do topo -->
        <?php include_once 'partes/landing_page/topo.php';?> 
        <section class="content text-white bg-transparent"><!-- banners -->
            <?php include_once 'partes/landing_page/carousel.php';?><!-- Região das comidas -->
            <?php include_once 'partes/landing_page/produtos2.php';?> <!-- Fale Conosco -->
            <?php include_once 'partes/landing_page/contato.php';?> <!-- login e cadastro -->
            <?php include_once 'partes/landing_page/acesso.php';?> <!-- sobre nós -->
            <?php include_once 'partes/landing_page/about.php';?>
        </section>
    </div>
</body>
</html>