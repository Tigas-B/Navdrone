<?php

require_once("../requisitos.php");

if(!verificarLogin()){
    header("Location: index.php");
    exit();
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
   <!-- Editor de Texto -->
   <script src="https://cdn.tiny.cloud/1/5z7av92t5br6bsn1ajdi3rum9s2wwjxjlu8och48b46zfa4v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
   <!-- JS -->
    <script src="/main.js" defer></script> 
   <!-- CSS -->
    <link rel="stylesheet" href="../public/fonts/Raleway/stylesheet.css">
    <link rel="stylesheet" href="../public/css/estilo_backoffice.css">
    <title>Backoffice</title>
</head>
<body class="backoffice">
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">Navdrone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?=($menu == "homepage") ? "active" : ""; ?>" aria-current="page" href="homepage.php">Index</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=($menu == "portfolio") ? "active" : ""; ?>" href="portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=($menu == "servicos") ? "active" : ""; ?>" href="servicos.php">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=($menu == "litigios") ? "active" : ""; ?>" href="privacidade_litigios.php">Privacidade e Litigios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=($menu == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    