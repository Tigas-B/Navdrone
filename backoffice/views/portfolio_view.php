<?php
    $fotos = todasFotos();
    $videos = todosVideos(); 
    $visitas = todasVisitas();
?>
    <main class="container text-center view portfolio">
        <div class="row">
            <div class="col my-4">
                <h1>Portfolio</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <h2>Fotografias</h2>
                <div class="mt-4">
                    <a href="fotografias_novo.php"><button class="novo">Novo</button></a>    
                    <a href="fotografias_editar.php"><button class="green">Editar</button></a>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center flex-wrap gap-3">
                <?php foreach($fotos as $f): ?>
					<img src="<?=$f["imagem"] ?>" width="250"> 
				<?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-5">
                <h2>Videos</h2>
                <div class="mt-4">
                    <a href="videos_novo.php"><button class="novo">Novo</button></a>    
                    <a href="videos_editar.php"><button class="green">Editar</button></a>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center flex-wrap gap-3">
                <?php foreach($videos as $i): ?>
					<iframe src="<?=$i["video"] ?>" width="350" height="200" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-5">
                <h2>Visitas 360</h2>
                <div class="mt-4">
                    <a href="visitas_novo.php"><button class="novo">Novo</button></a>    
                    <a href="visitas_editar.php"><button class="green">Editar</button></a>
                </div>
            </div>
            <?php foreach($visitas as $v): ?>
                <div class="col-4 my-4">
                    <img src="<?=$v["imagem"]; ?>" width="250">
                    <div class="mt-2 mx-auto">
                        <input class="w-100 border-0 text-center" type="text" name="titulo" value="<?=$v["titulo"];?>" readonly>
                        <input class="w-100 border-0 text-center" type="text" name="legenda" value="<?=$v["legenda"];?>" readonly>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>