<div id="produtos" class="container-fluid menus">
    <div class="row">
        <?php
        $a=['imgCoxinha.png','imgBatataFrita.jpeg','imgLunch.png','imgBatataFrita.jpeg','imgLunch.png','imgCoxinha.png',];
        foreach($a as $b){
        ?>
        <div class="col-4 bg-secondary pt-2">
            <figure class="rounded figure" id="produto1"><img class="figure-img img-fluid rounded" src="img/<?php echo $b?>" alt="produto01"></figure>
            <div class="verMais">ver mais</div>
            <p class="descricaoComida">Coxinha</p>
            <p class="linkComida"><a href="#">Ver+</a></p>
        </div>
        <?php
        }
        ?>
    </div>
</div>