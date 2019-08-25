<?php
$btnSemEstilo='background: none;color: inherit;border: none;padding: .5rem 1rem;font: inherit;cursor: pointer;outline: inherit;';
?>
<header class="container-fluid">
    <nav class="fixed-top row justify-content-around bg-dark">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="#topo">Início</a></li>
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
                if(($_SESSION['princdatui']['nivel'])!=0){
                    ?>
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="#inserir">Inserir produtos</a></li>
                    <?php
                }
            ?>
            <li class="nav-item nav-link bg-dark text-white"><button style="<?php echo $btnSemEstilo;?>" class="nav-link text-white" data-toggle="modal" data-target="#modal-user">Editar perfil</button></li>
            <li class="nav-item nav-link bg-dark"><a class="nav-link text-white" href="index.php?logout">Logout</a></li>
        </ul>
    </nav>
</header>
            <?php
                include_once "partes/landing_page/modal/user.php";
            }else{
                echo "</ul></nav></header>";
            }
?>