<header class="container-fluid">
    <nav class="fixed-top row justify-content-around bg-dark">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="#">Início</a></li>
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="#produtos">Produtos</a></li>
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="#contato">Fale Conosco</a></li>
            <?php
            if(!isset($_SESSION['princdatui']['nome'])){
            ?>
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="#cadastro">Acesse</a></li>
            <?php
            }
            ?>
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="#about">Sobre Nós</a></li>
            <?php
            if(isset($_SESSION['princdatui']['nome'])){
            ?>
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="index.php?logout">Logout</a></li>
            <?php
                if(($_SESSION['princdatui']['nivel'])!=0){
                    ?>
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="#inserir">Inserir produtos</a></li>
                    <?php
                }
            }
            ?>
        </ul>
    </nav>
</header>