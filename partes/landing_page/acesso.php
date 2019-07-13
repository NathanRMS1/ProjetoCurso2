<section id="cadastro" class="container-fluid menus">
    <header class="row">
       <div class="col-12"><p class="faleConosco text-center">Acesse o site</p></div>
    </header>
    <article class="row justify-content-around">
        <div class="col-12 col-lg-5 py-2" style="background: #212F3D;">
            <p class="text-center h2">Entre</p>
            <form action="cnf/cadastroLogin/login.php" method="post">
                <div class="row">
                    <div class="form-group col-6 col-lg-12">
                        <label for="inputEmail" class="text-white">Insira seu email</label>
                        <input type="email" class="form-control" name="email" placeholder="ari@osvaldo.com">
                    </div>
                    <div class="form-group col-6 col-lg-12">
                        <label for="inputPassword" class="text-white">Insira sua senha</label>
                        <input type="password" class="form-control" name="password" placeholder="******">
                    </div>
                </div>
                <button type="submit" class="btn btn-success form-control" name="salvar" class="submit">Logar</button>
            </form>
        </div>
        <div class="col-12 col-lg-6 py-2" style="background: #212F3D;">
            <p class="text-center h2">Cadastre-se</p>
            <form action="cnf/cadastroLogin/cadastrar.php" method="post">
                <div class="row">
                    <div class="form-group col-4 col-lg-12 float-left">
                        <label for="inserirNome" class="text-white">Insira seu nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Ariosvaldo Risos Cledivanderson da Silva Neves">
                    </div>
                    <div class="form-group col-4 col-lg-12 float-left">
                        <label for="inserirEmail" class="text-white">Insira seu email</label>
                        <input type="email" class="form-control" name="email" placeholder="ari@osvaldo.com">
                        <label for="inserirEmailR" class="text-white">Repita seu email</label>
                        <input type="email" class="form-control" placeholder="ari@osvaldo.com">
                    </div>
                    <div class="form-group col-4 col-lg-12 float-left">
                        <label for="inserirSenha" class="text-white">Insira sua senha</label>
                        <input type="password" class="form-control" name="password" placeholder="******">
                        <label for="inserirSenhaR" class="text-white">Repita sua senha</label>
                        <input type="password" class="form-control" placeholder="******">
                    </div>
                </div>
                <button type="submit" class="btn btn-success form-control" name="salvar">Cadastre-se</button>
            </form>
        </div>
    </article>
    <br>
</section>