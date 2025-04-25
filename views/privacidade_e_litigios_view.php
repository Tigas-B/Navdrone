    <?php
        $perguntas = todasPerguntas();
    ?>
    <main class="container px-5 px-md-4 pages">
        <div class="row">
            <div class="col-12 text-center my-4 mb-xl-5">
                <h2>POLÍTICA DE PRIVACIDADE</h2>
                <p class="mt-4">A utilização deste website por parte dos utilizadores implica a aceitação das cláusulas da nossa Política de Privacidade.</p>
            </div>
        </div>
        <div class="row mb-5">
            <?php foreach($perguntas as $p): ?>
                <div class="col-12 my-xl-4">
                    <h3><?=$p["texto"]; ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </main>