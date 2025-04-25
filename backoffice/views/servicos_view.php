<?php
    $todos_servicos = todosServicos();
?>
    <main>
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1>Serviços</h1>
            </div>
        </div>
        <?php foreach($todos_servicos as $t): ?>
            <div class="row my-5 text-center servicos">
                <div class="col-5">
                    <img src="<?= $t["imagem_banner"];?>" >
                </div>
                <div class="col-7 my-auto">
                    <h2><?= $t["titulo"];?></h2>
                    <h3><?= $t["subtitulo"];?></h3>
                    <p class="px-5" ><?= $t["intro_banner"];?></p>
                    <a href="./servico_editar.php?servico=<?= $t["id"];?>"><button class="btn btn-warning">Editar</button></a>
                </div>
            </div>
        <?php endforeach; ?>
    </main>