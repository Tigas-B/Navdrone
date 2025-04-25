<?php
    if(!empty($_GET["imagem"])){
        $imagem = $_GET["imagem"];
        iduSQL("INSERT INTO fotografias (imagem) VALUES ('$imagem')");
        header("Location: portfolio.php");
        exit();
    }
?>
<main class="container text-center fotos">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="mb-4">Fotografias - Novo</h2>
            <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="btn btn-secondary">Gestor de Ficheiros</button>
            </a>
        </div>
        <form>
            <label for="imagem">Fotografia</label>
            <input type="text" name="imagem" required>
            <br><br>
            <input class="green" type="submit" value="Registar">
        </form>
    </div>
</main>