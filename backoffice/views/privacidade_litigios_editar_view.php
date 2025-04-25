<?php
    if(!empty($_GET["editar"])){
        $id = $_GET["editar"];
        $texto_unico = selectSQLUnico("SELECT * FROM politica WHERE id=$id");
        if(!empty($_GET["texto"])){
            $texto = $_GET["texto"];
            iduSQL("UPDATE politica SET texto='$texto' WHERE id='$id'");
            header("Location: privacidade_litigios.php");
            exit();
        }
    }
    ?>
    <main class="container text-center">
        <?php if(empty($texto_unico)): ?>
            <div class="row">
                <div class="col my-5">
                    <h2>Não Existe Nenhuma Politica de Privacidade ou Litigios Com Esse Nome!</h2>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col my-4">
                    <h2>Politica de Privacidade e Litigios - Editar</h2>
                </div>
            </div>
            <form class="row">
                <input type="hidden" name="editar" value="<?= $texto_unico["id"];?>">
                <div class="col">
                    <textarea id="texto" name="texto" required><?= $texto_unico["texto"];?></textarea>
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
                        });
                    </script>
                    <input type="submit" class="green my-4" value="Editar">
            </form>
        <?php endif; ?>
    </main>