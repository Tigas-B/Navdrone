    <?php
        $encontrado = $_SESSION["usuario"];
    ?>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h2>Bem-Vindo <?=$encontrado["nome"]; ?></h2>
            </div>
        </div>
    </main>