<div id="contato" class="container-fluid menus">
    <header class="row">
      <div class="col-12"><p class="faleConosco text-center">Fale conosco</p></div>
    </header>
    <article class="row justify-content-around">
       <div class="col-12 col-lg-5" style="background: #212F3D;">
            <p class="text-center h2">Contato e endereço</p>
            <span class="text-white">
                Ligue para o número 4002-8922 <br>
                Rua Tuiuti, 2123
            </span><br>
            <?php include_once "partes/iframe.html";?>
        </div>
        <div class="col-12 col-lg-6 py-2" style="background: #212F3D;">
            <p class="text-center h2">Envie uma mensagem por aqui</p>
            <form action="index.html" method="get">
                <div class="row">
                    <div class="form-group col-6 col-lg-12">
                        <label for="" class="text-white">Nome:</label>
                        <input class="form-control" type="text" name="nome" placeholder="Insira seu nome">
                    </div>
                    <div class="form-group col-6 col-lg-12">
                            <label for="" class="text-white">E-mail:</label>
                            <input class="form-control" type="email" name="email" placeholder="Insira seu e-mail">
                    </div>
                    <div class="form-group col-6 col-lg-12">
                        <label for="" class="text-white">Telefone:</label>
                        <input class="form-control" type="tel" name="telefone" placeholder="Insira seu número de telefone">
                    </div>
                    <div class="form-group col-6 col-lg-12">
                        <label for="" class="text-white">Mensagem:</label>
                        <textarea class="form-control" type="text" name="mensagem" placeholder="Digite sua mensagem para entrarmos em contato"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success form-control" name="salvar">Enviar mensagem</button>
            </form>
        </div>
    </article>
</div>