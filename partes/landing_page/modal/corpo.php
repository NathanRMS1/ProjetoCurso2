<?php
#origem raiz/partes/landing_page/produtos.php
require "cnf/conexao.php";
?>
<figure class="figure">
    <img class="figure-img img-fluid rounded" src="img/<?php echo $a['imagem'];?>" alt="coxinha">
    <figcaption class="figure-caption"><?php echo $a['descricao'];?></figcaption>
</figure>
<?php
$comentarios=$conectar->query("SELECT * FROM comentario WHERE idProduto=$a[id] ORDER BY id DESC LIMIT 9");
if($comentarios){
    while($com=$comentarios->fetch_assoc()){
        $comentario=$conectar->query("SELECT * FROM usuario WHERE id=$com[idUser] ORDER BY id DESC LIMIT 9");
        while($g=$comentario->fetch_assoc()){
    ?>
    <div class="row">
        <div class="col-12"><span class="h3">
            <?php
            echo $g['nome'];
            ?>
        </span></div>
        <div class="col-12"><span class="p">
            <?php
            echo $com['comentario'];
            ?>
        </span></div>
    </div>
    <?php
        }
    }
}if(isset($_SESSION['princdatui']['nome'])){
    $idididid=$_SESSION['princdatui']['id'];
    echo $idididid;
    $comment=$conectar->query("SELECT * FROM comentario WHERE idUser='$idididid'");
    if($comment){
        print_r($comment);
    ?>
    <div class="row">
        <form action="cnf/comentario.php" method="post" class="col-12">
            <label class="h3">Deixe seu comentário sobre este alimento:</label><br>
            <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>
            <input type="hidden" name="idProduto" value="<?php echo $a['id']?>">
            <input type="hidden" name="idUser" value="<?php echo $_SESSION['princdatui']['id']?>">
            <button type="submit" class="btn btn-success form-control" name="salvar">Enviar comentário</button>
        </form>
    </div>
    <?php
    }else{
        print_r($comment);
}
}?>