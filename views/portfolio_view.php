	<?php
		$fotos = todasFotos();
		$videos = todosVideos(); 
		$visitas = todasVisitas();
	?>
	<main class="container pages mx-auto portfolio">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Portfólio</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 mb-5 d-flex justify-content-center flex-wrap gap-3 fotos">
				<h2 class="w-100">Fotografia</h2>
				<?php foreach($fotos as $f): ?>
					<img src="<?=$f["imagem"] ?>" alt="fotografia" width="300"> 
				<?php endforeach; ?>
			</div>
		</div>
		<div class="row videos">
			<div class="col-12 bg-dark py-5">
				<h2 class="text-center text-white pb-4">Videos</h2>
				<div id="carouselExampleIndicators" class="carousel slide">
					<div class="carousel-indicators">
						<?php foreach($videos as $i => $v): ?>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0) ? 'class="active" aria-current="true"': ""; ?> aria-label="Slide<?= $i+1; ?>"></button>
                    	<?php endforeach; ?>  
					</div>
					<div class="carousel-inner">
						<?php foreach($videos as $i): ?>
							<div class="carousel-item active text-center" data-bs-interval="10000">
								<iframe src="<?=$i["video"] ?>" width="800" height="450" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
						<?php endforeach; ?>
					</div>
					<button class="carousel-control-prev carousel-buttons" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next carousel-buttons" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
		<div class="row px-0 mb-5 empresas">
			<div class="col-12 my-5">
				<h2>Visitas 360</h2>
			</div>
			<div class="col-12 d-flex flex-wrap justify-content-center gap-4 gap-lg-5 px-0">
				<?php foreach($visitas as $v): ?>
					<div>
						<div class="position-relative">
							<div id="visitas" class="background position-absolute d-flex justify-content-center align-items-center">
								<a href="<?=$v["link"]; ?>" target="_blank">
									<button id="butao">Visitar</button>
								</a>
							</div>
							<img src="<?=$v["imagem"]; ?>" alt="visitas">
						</div>
						<div class="w-100 mt-2 text-center">
							<h3><?=$v["titulo"]; ?></h3>
							<p><?=$v["legenda"]; ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</main>