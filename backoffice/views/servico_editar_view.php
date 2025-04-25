    <?php
    if(!empty($_GET["servico"])){
        $id = $_GET["servico"];
        $servico_especifico = selectSQLUnico("SELECT * FROM servicos WHERE id=$id");
        if(!empty($_GET["imagem_banner"]) && !empty($_GET["intro_banner"]) && !empty($_GET["titulo"]) && !empty($_GET["subtitulo"]) && !empty($_GET["texto"])){
            $imagem_banner = $_GET["imagem_banner"];
            $titulo = $_GET["titulo"];
            $subtitulo = $_GET["subtitulo"];
            $intro_banner = $_GET["intro_banner"];
            $texto = $_GET["texto"];
            iduSQL("UPDATE servicos SET imagem_banner='$imagem_banner', titulo='$titulo', subtitulo='$subtitulo', intro_banner='$intro_banner', texto='$texto' WHERE id='$id'");
            header("Location: servicos.php");
            exit();
        } 
    }
    ?>
    <main class="container text-center portfolio">
        <?php if(empty($servico_especifico)): ?>
            <div class="row">
                <div class="col my-5">
                    <h2>Não Existe Nenhum Serviço Com Esse Nome!</h2>
                    <a href="./homepage.php"><button>Voltar para Home</button></a>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-12 my-4">
                    <h2>Serviço (<?= $servico_especifico["nome_servico"]; ?>)</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="my-4 d-flex justify-content-center align-items-center gap-4">
                        <h1>Banner</h1>
                    </div>
                </div>
            </div>
            <form class="row justify-content-center">
                <input type="hidden" name="servico" value="<?=$servico_especifico["id"];?>">
                <div class="col-12 d-flex flex-wrap gap-4 servicos-form">
                    <div>
                        <label for="imagem_banner">Imagem </label>
                        <input type="text" name="imagem_banner" value="<?=$servico_especifico["imagem_banner"];?>" required>
                    </div> 
                    <div>
                        <label for="titulo">Titulo </label>
                        <input type="text" name="titulo" value="<?=$servico_especifico["titulo"];?>" required>
                    </div>                    
                    <div>
                        <label for="subtitulo">Subtitulo </label>
                        <input type="text" name="subtitulo" value="<?=$servico_especifico["subtitulo"];?>" required>    
                    </div>
                    <div>
                        <label for="intro_banner">Intro Banner </label>
                        <input type="text" name="intro_banner" value="<?=$servico_especifico["intro_banner"];?>" required>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type="button" class="btn btn-secondary">Gestor de Ficheiros</button>
                    </a>
                    <h1 class="my-5">Body</h1>
                    <textarea name="texto" id="texto" required><?=$servico_especifico["texto"];?></textarea>
                    <script>
                        var base_url = "https://localhost/portfolio/";
                        tinymce.init({
                            selector: '#texto',
                            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker permanentpen powerpaste advtable advcode editimage advtemplate tableofcontents',
                            toolbar: 'undo redo | blocks fontsize | bold italic underline strikethrough | link image media table | align lineheight | checklist numlist bullist indent outdent | emoticons charmap',
                            relative_urls: false,
                            remove_script_host : false,
                            language: "pt_PT",
                            image_advtab: true,
                            height: 1000
                        });
                    </script>
                </div>
                <input type="submit" class="my-4 btn btn-warning" value="Editar">
            </form>
        <?php endif; ?>
    </main>