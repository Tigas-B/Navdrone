<?php
    $carousel = todosCarousel();
    $intro_home = introHome();
    $intro_servicos = introServicos();
    $intro_producao = introProducao();
    $visitas_home = todosServicosVisitas();
    $producao = todosServicosProducao();

    if(!empty($_GET["imagem_carousel"]) && !empty($_GET["id"])){
        $imagem = $_GET["imagem_carousel"];
        $id = $_GET["id"];
        iduSQL("UPDATE carousel SET imagem='$imagem' WHERE id='$id'");
        header("Location: homepage.php");
        exit();
    } 
    if(!empty($_GET["titulo_home"]) && !empty($_GET["titulo_servicos"]) && !empty($_GET["titulo_producao"])){
        $titulo_h = $_GET["titulo_home"];
        $titulo_s = $_GET["titulo_servicos"];
        $titulo_p = $_GET["titulo_producao"];
        iduSQL("UPDATE home SET texto='$titulo_p' WHERE id=6");
        iduSQL("UPDATE home SET texto='$titulo_s' WHERE id=2");
        iduSQL("UPDATE home SET texto='$titulo_h' WHERE id=1");
        header("Location: homepage.php");
        exit();
    }
    if(!empty($_GET["id_v"]) && !empty($_GET["imagem_v"]) && !empty($_GET["titulo_v"]) && !empty($_GET["texto_v"]) && !empty($_GET["color_v"])){
        $id_v = $_GET["id_v"];
        $imagem_v = $_GET["imagem_v"];
        $titulo_v = $_GET["titulo_v"];
        $texto_v = $_GET["texto_v"];
        $color_v = $_GET["color_v"];
        iduSQL("UPDATE servicos SET imagem_home='$imagem_v', intro_home='$texto_v', subtitulo='$titulo_v', color='$color_v' WHERE id='$id_v'");
        header("Location: homepage.php");
        exit();
    }
    if(!empty($_GET["id_p"]) && !empty($_GET["imagem_p"]) && !empty($_GET["titulo_p"]) && !empty($_GET["texto_p"]) && !empty($_GET["color_p"])){
        $id_p = $_GET["id_p"];
        $imagem_p = $_GET["imagem_p"];
        $titulo_p = $_GET["titulo_p"];
        $texto_p = $_GET["texto_p"];
        $color_p = $_GET["color_p"];
        iduSQL("UPDATE servicos SET imagem_home='$imagem_p', intro_home='$texto_p', subtitulo='$titulo_p', color='$color_p' WHERE id='$id_p'");
        header("Location: homepage.php");
        exit();
    }
    
?>
    <main class="container text-center">
        <div class="row">
            <div class="col-12 mt-4">
                <h1>Homepage</h1>
                <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                    <button type="button" class="btn btn-secondary">Gestor de Ficheiros</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="mt-5">Carousel</h3>
                <a href="carousel_novo.php"><button class="my-4 green">Novo</button></a>
                <table>
                    <tr>
                        <th>Imagem</th>
                        <th>Link</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach($carousel as $c): ?>
                        <form>
                            <input type="hidden" name="id" value="<?=$c["id"]; ?>">
                            <tr>
                                <td><img src="<?=$c["imagem"]; ?>" width="200"></td>
                                <td class="large"><input class="w-100" type="text" name="imagem_carousel" value="<?=$c["imagem"]; ?>" required></td>
                                <td class="d-flex justify-content-center align-items-center gap-3 cor">
                                    <input type="submit" class="m-0 btn btn-warning" value="Editar">
                                    <a href="carousel_apagar.php?apagar=<?=$c["id"];?>"><button type="button" class="btn btn-danger">Apagar</button></a>
                                </td>
                            </tr>
                        </form>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="row mt-4 borda mx-auto">
            <form class="col-12 d-flex flex-wrap justify-content-center my-4">
                <div class="col-12 my-3">
                    <h1>Intro</h1>
                    <textarea name="titulo_home" rows="6" cols="100" required><?= $intro_home["texto"]; ?></textarea>
                </div>                  
                <div class="col-6">
                    <h1>Serviços</h1>
                    <textarea name="titulo_servicos" rows="6" cols="70" required><?= $intro_servicos["texto"]; ?></textarea>
                </div>
                <div class="col-6">
                    <h1>Produção</h1>
                    <textarea name="titulo_producao" rows="6" cols="70"><?= $intro_producao["texto"]; ?></textarea>
                </div>
                <input type="submit" class="my-3 btn btn-warning" value="Editar">
            </form>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <h2>Visitas Virtuais</h2>
                <table class="mt-4">
                    <tr>
                        <th>Imagem</th>
                        <th>Info</th>
                        <th>Cor</th>
                        <th>Editar</th>
                    </tr>
                    <?php foreach($visitas_home as $v): ?>
                        <form>
                            <input type="hidden" name="id_v" value="<?= $v["id"]; ?>">
                            <tr>
                                <td><img src="<?=$v["imagem_home"]; ?>" height="150"></td>
                                <td class="large">
                                    <input class="w-100" type="text" name="imagem_v" value="<?=$v["imagem_home"]; ?>">
                                    <br><br>
                                    <input class="w-100" type="text" name="titulo_v" value="<?=$v["subtitulo"]; ?>">
                                    <textarea class="w-100" name="texto_v" rows="2"><?=$v["intro_home"]; ?></textarea>
                                </td>
                                <td class="small"><input type="color" name="color_v" value="<?= $v["color"]; ?>"></td>
                                <td><input type="submit" class="mb-1 btn btn-warning" value="Editar"></td>
                            </tr>
                        </form>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-12 my-4 borda">
                <div>
                    <h1>Produção</h1>
                </div>
                <table class="mt-4">
                    <tr>
                        <th>Imagem</th>
                        <th>Info</th>
                        <th>Cor</th>
                        <th>Editar</th>
                    </tr>
                    <?php foreach($producao as $p):?>
                        <form>
                            <input type="hidden" name="id_p" value="<?= $p["id"]; ?>">
                            <tr>
                                <td><img src="<?=$p["imagem_home"]; ?>" width="200"></td>
                                <td class="large">
                                    <input class="w-100" type="text" name="imagem_p" value="<?=$p["imagem_home"]; ?>" required>
                                    <br><br>
                                    <input class="w-100" type="text" name="titulo_p" value="<?=$p["subtitulo"]; ?>" required>
                                    <textarea class="w-100" name="texto_p" cols="60" rows="3" required><?=$p["intro_home"]; ?></textarea>
                                </td>
                                <td><input type="color" name="color_p" value="<?= $p["color"]; ?>"></td>
                                <td><input type="submit" class="mb-1 btn btn-warning" value="Editar"></td>
                            </tr>
                        </form>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>