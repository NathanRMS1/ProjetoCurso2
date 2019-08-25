<?php
$classimg2="figure-img img-fluid my-0 w-25 float-right rounded";
?>
<div id="produtos" class="container-fluid menus">
    <div class="row align-items-end">
        <?php
        $ExePedirP=$conectar->query("SELECT * FROM produtos ORDER BY id DESC LIMIT 6");
        while($a=$ExePedirP->fetch_assoc()){
        ?>
        <div class="col-6 col-lg-4 py-2">
            <figure class="rounded figure col-12" id="produto<?php echo $a['id'];?>">
                <img class="figure-img img-fluid rounded" src="img/produtos/<?php echo $a['imagem']?>" alt="<?php echo $a['nome'];?>">
                <figcaption class="text-justify text-truncate"><?php echo $a['descricao'];?></figcaption>
            </figure>
            <div class="col-12 bg-light rounded" style="padding:0;align-items:flex-end;">
                <button class="btn btn-block" data-toggle="modal" data-target="#modal-<?php echo $a['id'];?>">
                    Saiba mais
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg text-dark" id="modal-<?php echo $a['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-center"><!---->
                        <span class="modal-title h3 col" id="exampleModalCenterTitle"><?php echo $a['nome'];?></span>
                        <figure class="figure col my-0 text-right">
                            <figcaption class="figure-caption text-right">Disponível também no iFood e Uber Eats</figcaption>
                            <a href="https://www.ubereats.com/pt-BR/"><img src="img/uberEats.png" class="<?php echo $classimg2;?>"></a>
                            <a href="https://www.ifood.com.br/"><img src="img/ifood.jpg" class="<?php echo $classimg2;?>"></a>
                        </figure>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"> <!-- Corpo do modal -->
                       <?php include "modal/corpo.php"?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>