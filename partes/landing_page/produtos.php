<div id="produtos" class="container-fluid menus">
    <div class="row align-items-end">
        <?php
        $ExePedirP=$conectar->query("SELECT * FROM produtos ORDER BY id DESC LIMIT 6");
        while($a=$ExePedirP->fetch_assoc()){
        ?>
        <div class="col-6 col-lg-4 py-2">
            <figure class="rounded figure col-12" id="produto<?php echo $a['id'];?>">
                <img class="figure-img img-fluid rounded" src="img/<?php echo $a['imagem']?>" alt="<?php echo $a['nome'];?>">
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
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $a['nome'];?></h5>
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