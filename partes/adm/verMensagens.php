<?php
#origem raiz/partes/landing_page/contato.php
?>
<div class="modal fade text-dark" id="modal-msg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar informações</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php
            $ExePedirP=$conectar->query("SELECT * FROM mensagens ORDER BY id DESC");
            while($a=$ExePedirP->fetch_assoc()){
                $comentario=$conectar->query("SELECT * FROM usuario WHERE id=$a[idUser]");
                while($g=$comentario->fetch_assoc()){
            ?>
                <div class="row bg-dark text-white py-2 m-1 rounded">
                    <div class="col-8">
                        <span class="h5">
                        <?php if($g['nome']==$a['nome']){echo lmWord($g['nome']);}else{echo lmWord($a['nome'])."<span class='text-info'> enviado pela conta com nome: </span>".lmWord($g['nome']);}?>
                        </span><span class="text-secondary px-2">
                        <?php if($g['email']==$a['email']){echo $g['email'];}else{echo $a['email']."<span class='text-info'> enviado pela conta com email: </span>".$g['email'];}?>
                        </span><br><span class="text-secondary px-2">
                        <?php echo "Número de telefone: $a[tel]";?>
                        </span>
                    </div>
                    <form action="cnf/rMensagem.php" method="post" class="col-4">
                        <input type="hidden" name="idMsg" value="<?php echo $a['id'];?>">
                        <button type="submit" name="salvar" class="btn btn-info float-right">Remover comentário</button>
                    </form>
                    <div class="col-12"><span class="h6">
                        <?php
                        echo $a['mensagem'];
                        ?>
                    </span></div>
                </div>
                <?php
                }
            }
            ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>