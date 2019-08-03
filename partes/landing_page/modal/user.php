<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar informações</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="h4">Edite suas informações abaixo</span>
                <form action="cnf/editarUser.php" method="post" class="form-group">
                    <div class="row">
                        <label for="">Nome:</label>
                        <input class="form-control" type="text" name="nome" value="<?php echo $_SESSION['princdatui']['nome']?>" required="required">
                        <label for="">Email:</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $_SESSION['princdatui']['email']?>" required="required">
                        <label for="">Insira sua antiga senha (caso queira modificá-lá):</label>
                        <input class="form-control" type="password" name="senhaA">
                        <label for="">Insira sua nova senha:</label>
                        <input class="form-control" type="password" name="senhaN">
                        <label for="">Insira sua nova senha novamente:</label>
                        <input class="form-control" type="password" name="senhaNC">
                        <button type="submit" class="btn btn-outline-dark form-control" name="salvar">Modificar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>