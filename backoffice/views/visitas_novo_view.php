<?php
    if(!empty($_GET["imagem"]) && !empty($_GET["link"]) && !empty($_GET["titulo"]) && !empty($_GET["legenda"])){
        $imagem = $_GET["imagem"];
        $link = $_GET["link"];
        $titulo = $_GET["titulo"];
        $legenda = $_GET["legenda"];
        iduSQL("INSERT INTO visitas_virtuais_360(imagem, link, titulo, legenda) VALUES ('$imagem', '$link', '$titulo', '$legenda')");
        header("Location: portfolio.php");
        exit();
    }
?>
<main class="container text-center portfolio">
    <div class="row">
        <div class="col-12 my-4">
            <h2>Visitas Virtuais 360 - Novo</h2>
        </div>
        <form>
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" required>
            <br><br>
            <label for="link">Link</label>
            <input type="text" name="link" required>
            <br><br>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" required>
            <br><br>
            <label for="legenda">Legenda</label>
            <input type="text" name="legenda" required>
            <br><br>
            <button class="btn btn-secondary">Gestor de Ficheiros</button>
            <br><br>
            <input class="green" type="submit" value="Registar">
        </form>
    </div>
</main>