<?php
    $visitas = todasVisitas();
    if(!empty($_GET["editar"])){
        $id = $_GET["editar"];
        if(!empty($_GET["imagem"]) && !empty($_GET["link"]) && !empty($_GET["titulo"]) && !empty($_GET["legenda"])){
            $imagem = $_GET["imagem"];
            $link = $_GET["link"];
            $titulo = $_GET["titulo"];
            $legenda = $_GET["legenda"];
            iduSQL("UPDATE visitas_virtuais_360 SET imagem='$imagem', link='$link', titulo='$titulo', legenda='$legenda' WHERE id=$id");
            header("Location: portfolio.php");
            exit();
        }
    }
?>
<main class="container text-center portfolio ">
    <div class="row">
        <div class="col-12 my-4">
            <h2>Visitas Virtuais - Editar</h2>
        </div>
            <table>
                <tr>
                    <th>Imagem</th>
                    <th>Links</th>
                    <th>Legenda</th>
                    <th>Ações</th>
                </tr>
                <form>
                    <?php foreach($visitas as $v): ?>
                        <input type="hidden" name="editar" value="<?= $v["id"];?>">
                        <tr class="visitas-link">
                            <td><img src="<?=$v["imagem"]; ?>" width="200"></td>
                            <form>
                                <td class="d-flex flex-wrap large">
                                    <div class="w-100">
                                        <label for="link">Link da Imagem</label>
                                        <input class="w-100" type="text" name="imagem" value="<?=$v["imagem"]; ?>" required>
                                    </div>
                                    <div class="w-100">
                                        <label for="link">Link da Visita</label>
                                        <input class="w-100" type="text" name="link" value="<?=$v["link"]; ?>" required>
                                    </div>
                                </td>
                                <td class="small">
                                    <input type="text" name="titulo" value="<?= $v["titulo"];?>" required>
                                    <input type="text" name="legenda" value="<?= $v["legenda"];?>" required>
                                </td>
                                <td>
                                    <input type="submit" class="mb-1 btn btn-warning" value="Editar">
                                    <a href="visitas_apagar.php?apagar=<?=$v["id"];?>"><button type="button" class="mt-1 btn btn-danger">Apagar</button></a>                            
                                </td>
                        </tr>
                    <?php endforeach; ?>
                </form>
            </table>
        </div>
    </main>
           