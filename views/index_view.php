<?php
    $intro_home = introHome();
    $intro_servicos = introServicos();
    $intro_producao = introProducao();
    $visitas = todosServicosVisitas();
    $producao = todosServicosProducao();
?>
    <main class="container-fluid mt-2 mt-lg-5 mx-auto">
        <div class="row">
            <div class="col-12 px-5 px-xl-0 text-center intro">
                <p><?=$intro_home["texto"]; ?></p>
            </div>
            <div class="col-12 text-center my-4">
                <a href="contactos.php"><button id="servicos" type="button">Vamos Conversar!</button></a>
            </div>
        </div>
        <div class="row mt-5 text-center d-flex justify-content-center">
            <h1>Serviços</h1>
            <p class="w-75"><?=$intro_servicos["texto"]; ?></p>
            <h2>Visitas Virtuais</h2>
        </div>
        <div class="row mt-lg-5 mt-3 mx-lg-0 mx-5 justify-content-center gap-4">
            <?php foreach($visitas as $v): ?>
            <div class="col-12 py-4 text-center d-flex flex-wrap justify-content-between servicos" data-color="<?=$v['color'];?>">
                <div>
                    <h3 class="w-100"><?=$v["subtitulo"]; ?></h3>
                    <p class="px-3 w-100"><?=$v["intro_home"]; ?></p>
                </div>
                <div class="mx-auto w-100">
                    <img src="<?=$v["imagem_home"]; ?>" alt="servicos">
                </div>
                <div class="mx-auto my-1">
                    <?php if($v["id"] == 1): ?>
                        <a class="text-decoration-none text-black" href="servico_personalizado.php">Saiba Mais</a>
                    <?php elseif($v["id"] == 2): ?>    
                        <a class="text-decoration-none text-black" href="servico_matterport.php">Saiba Mais</a>
                    <?php else: ?>
                        <a class="text-decoration-none text-black" href="servico_google.php">Saiba Mais</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="row my-4 text-center">
            <div class="col-12 p-4">
                <h2>Produção Audiovisual e Multimedia</h2>
                <p class="px-5"><?=$intro_producao["texto"]; ?></p>
            </div>
            <div class="col-12">
                <a href="portfolio.php"><button type="button">Ver Portfólio</button></a>
            </div>
            <?php foreach($producao as $p): ?>
                <div class="col-12 col-md-5 my-0 my-md-5 p-4 mx-auto producao">
                    <div>
                        <h3><?=$p["subtitulo"]; ?></h3>
                        <p><?=$p["intro_home"]; ?></p>
                    </div>
                    <div class="mx-auto w-100">
                        <img src="<?=$p["imagem_home"]; ?>" alt="servicos">
                    </div>
                    <div class="mx-auto my-1">
                        <?php if($p["id"] == 4): ?>
                            <a class="text-decoration-none text-black" href="servico_foto_video.php">Saiba Mais</a>
                        <?php else: ?>
                            <a class="text-decoration-none text-black" href="servico_adaptavel.php">Saiba Mais</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>