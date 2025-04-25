<?php
    $fotos = todasFotos();
    if(!empty($_GET["editar"])){
        $id = $_GET["editar"];
        if(!empty($_GET["imagem"])){
            $imagem = $_GET["imagem"];
            iduSQL("UPDATE fotografias SET imagem='$imagem' WHERE id=$id");
            header("Location: portfolio.php");
            exit();
        }
    }
?>
<main class="container text-center portfolio ">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="mb-4">Fotografias - Editar</h2>
            <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="btn btn-secondary">Gestor de Ficheiros</button>
            </a>
        </div>
            <table>
                <tr>
                    <th>Imagem</th>
                    <th>Link</th>
                    <th>Ações</th>
                </tr>
                <form>
                    <?php foreach($fotos as $f): ?>
                        <input type="hidden" name="editar" value="<?= $f["id"];?>">
                        <tr>
                            <td><img src="<?=$f["imagem"]; ?>" width="200"></td>
                            <td class="large"><input class="w-100" type="text" name="imagem" value="<?=$f["imagem"]; ?>" required></td>
                            <td class="d-flex justify-content-center align-items-center gap-3 cor">
                                <input type="submit" class="m-0 btn btn-warning" value="Editar">
                                <a href="fotografia_apagar.php?apagar=<?=$f["id"];?>"><button type="button" class="btn btn-danger">Apagar</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </form>
            </table>
    </div>
</main>