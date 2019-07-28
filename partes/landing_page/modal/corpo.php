<?php
#origem raiz/partes/landing_page/produtos.php
require "cnf/conexao.php";
?>
<figure class="figure">
    <img class="figure-img img-fluid rounded" src="img/<?php echo $a['imagem'];?>" alt="coxinha">
    <figcaption class="figure-caption"><?php echo $a['descricao'];?></figcaption>
</figure>
<?php
$secaoComentarios=$conectar->query("SELECT * FROM comentario WHERE idProduto=$a[id] ORDER BY id DESC LIMIT 9");
if($secaoComentarios){
    while($com=$secaoComentarios->fetch_assoc()){
        $comentario=$conectar->query("SELECT * FROM usuario WHERE id=$com[idUser] ORDER BY id DESC LIMIT 9");
        while($g=$comentario->fetch_assoc()){
    ?>
    <div class="row bg-dark text-white py-2 m-1 rounded">
        <div class="col-12">
            <form action="cnf/rComentario.php" method="post">
                <span class="h5"><?php echo $g['nome'];?></span><span class="text-secondary px-2"><?php echo $g['email']?></span><?php
                if(isset($_SESSION['princdatui'])){
                    if($_SESSION['princdatui']['nivel']!=0 or $com['idUser']==$_SESSION['princdatui']['id']){
                ?>
                <input type="hidden" name="idComen" value="<?php echo $com['id'];?>">
                <button type="submit" name="salvar" class="btn btn-info">Remover comentário</button>
            </form>
            <!-- <button class="btn btn-info" data-toggle="modal" data-target="#modal-8">teste</button> -->
            <?php
                }
            }
            ?>
        </div>
        <div class="col-12"><span class="h3">
            <?php
            echo $com['comentario'];
            ?>
        </span></div>
    </div>
    <?php
        }
    }
}
if(isset($_SESSION['princdatui']['nome'])){
    $idididid=$_SESSION['princdatui']['id'];
    $comment=$conectar->query("SELECT * FROM comentario WHERE idUser='$idididid' && idProduto='$a[id]'");
    if($comment){
        $ba=[];
        while($co=$comment->fetch_assoc()){
            $ba=$co;
        }
        if(($ba==[])||($_SESSION['princdatui']['nivel']!=0)){
    ?>
    <div class="row">
        <form action="cnf/aComentario.php" method="post" class="col-12">
            <label class="h3">Deixe seu comentário sobre este alimento:</label><br>
            <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>
            <input type="hidden" name="idProduto" value="<?php echo $a['id']?>">
            <input type="hidden" name="idUser" value="<?php echo $_SESSION['princdatui']['id']?>">
            <button type="submit" class="btn btn-success form-control" name="salvar">Enviar comentário</button>
        </form>
    </div>
    <?php
        }
    }else{
        echo '<script>alert("Erro Fatal nos comentários!");</script>';
        die;
}
}?>