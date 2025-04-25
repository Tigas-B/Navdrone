<?php
    if(!empty($_GET["video"])){
        $video = $_GET["video"];
        iduSQL("INSERT INTO videos (video) VALUES ('$video')");
        header("Location: portfolio.php");
        exit();
    }
?>
<main class="container text-center portfolio">
    <div class="row">
        <div class="col-12 my-4">
            <h2>Video - Novo</h2>
        </div>
        <form>
            <label for="video">Video</label>
            <input type="text" name="video" required>
            <br><br>
            <input class="green" type="submit" value="Registar">
        </form>
    </div>
</main>