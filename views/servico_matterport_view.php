<?php
    $servico_personalizado = servicoEspecifico(2)
    ?>
    <main class="container-fluid pages mx-auto">
        <div class="row py-4 text-center servico" data-color="<?=$servico_personalizado['color'];?>">
            <div class="col-12 d-block d-md-flex justify-content-around align-items-center">
                <div>
                    <img src="<?= $servico_personalizado["imagem_banner"];?>" alt="banner">
                </div>
                <div class="pt-5 pb-3 p-md-5">
                    <h2><?= $servico_personalizado["titulo"];?></h2>
                    <h3><?= $servico_personalizado["subtitulo"];?></h3>
                    <p class="py-4"><?= $servico_personalizado["intro_banner"];?></p>
                    <a href="contactos.php"><button class="texto-botoes">Pedir Orçamento</button></a>
                </div>
            </div>
        </div>
        <div class="row my-5 mx-auto px-5 texto">
            <div class="col-12 px-0 matterport">
                <?= $servico_personalizado["texto"];?>
            </div>
        </div>
    </main>