<?php
require_once("../requisitos.php");

if(!empty($_POST["login"]) && !empty($_POST["senha"])){
    if(login($_POST["login"], $_POST["senha"])){
        header("Location: home.php");
        exit();
    }
}        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/estilo_backoffice.css">
    <title>Backoffice</title>
</head>
<body class="login_page d-flex justify-content-center">
    <section class="text-center">
        <img src="../public/imagens/LogoSiteV2.png" alt="">
        <div class="text-center p-5 m-auto d-flex flex-wrap justify-content-center align-items-center login">
            <h1 class="w-100">Backoffice</h1>
            <form class="w-100" method="post">
                <!-- <?php if(!empty($_POST["login"]) && !empty($_POST["senha"])): ?>
                    <h3 class="text-danger">Login Inválido</h3>
                <?php endif; ?> -->
                <input type="text" name="login" placeholder="Nome" required>
                <br>
                <input type="password" name="senha" placeholder="Password" required>
                <br>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </section>
</body>
</html>