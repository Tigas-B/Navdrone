<?php
    $texto = todasPerguntas();
?>
    <main class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center my-5">Privacidade e Litigios</h2>
                <?php foreach($texto as $t): ?>
                    <div class="col-12 my-xl-4"><?=$t["texto"]; ?></div>
                    <div class="d-flex gap-4">
                        <a href="privacidade_litigios_editar.php?editar=<?=$t["id"];?>">
                            <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                        <br><br>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $t["id"];?>">Apagar</button>
                        <div class="modal fade" id="staticBackdrop<?= $t["id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel<?= $t["id"];?>"><?= $t["titulo"];?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">Deseja apagar este Item?</div>
                                    <div class="modal-footer">
                                        <a href="noticias.php"><button type="button" class="btn btn-dark" data-bs-dismiss="modal">Voltar</button></a>
                                        <a href="privacidade_litigios_apagar.php?apagar=<?= $t["id"];?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Apagar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>