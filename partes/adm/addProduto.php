<div id="inserir" class="container-fluid menus">
    <header class="row">
      <div class="col-12"><p class="faleConosco text-center">Incluir produto</p></div>
    </header>
    <article class="row justify-content-around">
        <div class="col-10 py-2" style="background: #212F3D;">
            <p class="text-center h2">Inserir</p>
            <form action="cnf/addProd.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="" class="text-white">Nome do produto:</label>
                        <input class="form-control" type="text" name="nome" placeholder="Coxinha">
                    </div>
                    <div class="form-group col-12">
                        <label for="" class="text-white">Descrição:</label>
                        <input class="form-control" type="text" name="desc" placeholder="Algo muito delicioso">
                    </div>
                    <div class="form-group col-12">
                        <label for="" class="text-white">Arquivo de imagem:</label>
                    </div>
                    <div class="col-12 input-group mb-4 mt-n3">
                        <div class="custom-file">
                            <label for="" class="custom-file-label">Escolha o arquivo</label>
                            <input class="custom-file-input" type="file" name="imagem">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success form-control" name="salvar">Adicionar</button>
            </form>
        </div>
    </article>
</div>