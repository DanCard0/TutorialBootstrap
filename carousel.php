<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Carousel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">
		<h1>TOP MUSIC</h1>
		<div class="row">
			<div class="col-xs-7">
				<div id="carousel-ejemplo" id="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#carousel-ejemplo" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="1"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="2"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="3"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="4"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="5"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="6"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="7"></li>
					</ul>

					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/artista1.jpg" alt="">
							<div class="carousel-caption">
								<h3>Artista 1</h3>
								<p>Ejemplo de descripción del artista 1</p>
							</div>
						</div>

						<div class="item">
							<img src="img/artista2.jpg" alt="...">
							<div class="carousel-caption">
								<h3>Artista 2</h3>
								<p>Ejemplo de descripción del artista 2</p>
							</div>
						</div>

						<div class="item">
							<img src="img/artista3.jpg" alt="...">
							<div class="carousel-caption">
								<h3>Artista 3</h3>
								<p>Ejemplo de descripción del artista 3</p>
							</div>
						</div>

						<div class="item">
							<img src="img/artista4.jpg" alt="...">
							<div class="carousel-caption">
								<h3>Artista 4</h3>
								<p>Ejemplo de descripción del artista 4</p>
							</div>
						</div>

						<div class="item">
							<img src="img/artista5.jpg" alt="...">
							<div class="carousel-caption">
								<h3>Artista 5</h3>
								<p>Ejemplo de descripción del artista 5</p>
							</div>
						</div>

						<div class="item">
							<img src="img/artista6.jpg" alt="...">
							<div class="carousel-caption">
								<h3>Artista 6</h3>
								<p>Ejemplo de descripción del artista 6</p>
							</div>
						</div>

						<div class="item">
							<img src="img/artista7.jpg" alt="...">
							<div class="carousel-caption">
								<h3>Artista 7</h3>
								<p>Ejemplo de descripción del artista 7</p>
							</div>
						</div>

						<div class="item">
							<img src="img/artista8.jpg" alt="...">
							<div class="carousel-caption">
								<h3>Artista 8</h3>
								<p>Ejemplo de descripción del artista 8</p>
							</div>
						</div>
					</div>

					<!--Controles-->
					<a class="left carousel-control" href="#carousel-ejemplo" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previo</span>
					</a>
					<a class="right carousel-control" href="#carousel-ejemplo" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>
		</div>
	</div>


	<br><br><br>
	<a href="boton-acordeon.php">Anterior ejemplo | </a>
	<a href="varios.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<script>
		$('.carousel').carousel({
			interval : 1000,
			pause : "hover"
		})
	</script>
</body>
</html>