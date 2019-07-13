<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pagina inicial</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <form action="cnf/cadastroLogin/login.php" method="post">
        <span class="cadlog">Insira seu email</span>
        <input type="email" name="email" placeholder="ari@osvaldo.com">
        <br>
        <span class="cadlog">Insira sua senha</span>
        <input type="password" name="password" placeholder="******">
        <br>
        <input type="submit" name="salvar" value="Logar">
    </form>
    <br>
    <form action="cnf/cadastroLogin/cadastrar.php" method="post">
        <span class="cadlog">Insira seu nome</span>
        <input type="text" name="nome" placeholder="Ariosvaldo Risoscleidevanderson Junior">
        <br>
        <span class="cadlog">Insira seu email</span>
        <input type="email" name="email" placeholder="ari@osvaldo.com">
        <span class="cadlog">Repita seu email</span>
        <input type="email" placeholder="ari@osvaldo.com">
        <br>
        <span class="cadlog">Insira sua senha</span>
        <input type="password" name="password" placeholder="******">
        <span class="cadlog">Repita sua senha</span>
        <input type="password" placeholder="******">
        <br>
        <input type="submit" name="salvar" value="Cadastre-se">
    </form>
</body>
</html>
<?php
?>