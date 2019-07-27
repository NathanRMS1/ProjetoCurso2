<div id="inserir" class="container-fluid menus">
    <header class="row">
      <div class="col-12"><p class="faleConosco text-center">Incluir produto</p></div>
    </header>
    <article class="row justify-content-around">
        <div class="col-10 py-2" style="background: #212F3D;">
            <p class="text-center h2">Inserir</p>
            <form action="cnf/addProd.php" method="post">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="" class="text-white">Nome do produto:</label>
                        <input class="form-control" type="text" name="nome" placeholder="Insira seu nome">
                    </div>
                    <div class="form-group col-12">
                        <label for="" class="text-white">Descrição:</label>
                        <input class="form-control" type="text" name="desc" placeholder="Insira seu e-mail">
                    </div>
                    <div class="form-group col-12">
                        <label for="" class="text-white">Nome da imagem:</label>
                        <input class="form-control" type="text" name="img" placeholder="Insira seu número de telefone">
                    </div>
                </div>
                <button type="submit" class="btn btn-success form-control" name="salvar">Adicionar</button>
            </form>
        </div>
    </article>
</div>