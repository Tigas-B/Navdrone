<?php
    $videos = todosVideos();
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        if(!empty($_GET["video"])){
            $video = $_GET["video"];
            iduSQL("UPDATE videos SET video='$video' WHERE id=$id");
            header("Location: portfolio.php");
            exit();
        }
    }
?>
<main class="container text-center portfolio ">
    <div class="row">
        <div class="col-12 my-4">
            <h2>Videos - Editar</h2>
        </div>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Link</th>
                <th>Ações</th>
            </tr>
            <form>
                <?php foreach($videos as $v): ?>
                    <input type="hidden" name="editar" value="<?= $v["id"];?>">
                    <tr>
                        <td><iframe src="<?=$v["video"] ?>" width="250" height="140" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></td>
                        <td class="large"><input class="w-100" type="text" name="video" value="<?=$v["video"]; ?>" required></td>
                        <td>
                            <input type="submit" class="btn btn-warning" value="Editar">
                            <a href="video_apagar.php?apagar=<?= $v["id"]?>"><button type="button" class="btn btn-danger">Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </form>
        </table>
    </main>