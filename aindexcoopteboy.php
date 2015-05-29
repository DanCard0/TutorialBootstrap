<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Educación Virtual Coopteboy - Bienvenido</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<style>
		#img-colegio {
			width: 100%;
		}

		#logo {
			background: url(img/logo-coopteboy.png) no-repeat 0 0;
			display: block;
			float: left;
			width: 100%;
			height: 75px;
			border-radius: 7px;
			border-left: 5px;
		}

		.boton-centrar {
			text-align: center;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<!--Botón desplegable en vista móvil-->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ejemplo">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#">EVCoopteboy</a>
			</div>

			<div class="collapse navbar-collapse" id="ejemplo">

				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://evcoopteboy.esy.es/cursos/login/index.php">Ingresar como usuario registrado</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="page-navbar" class="clearfix">
		<div class="container-fluid" id="logo"></div>
	</div>

	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 responsive"><img src="img/colegio.jpg" alt="..." class="img-rounded" id="img-colegio"></div>
			</div>

			<br>

			<p><small>El Colegio Coopteboy, pone a disposición de la comunidad académica el Aula Virtual como una herramienta de apoyo a la educación presencial donde estudiantes, docentes, administrativos y académicos podrán interactuar durante el proceso de formación.</small></p>

			<div class="row boton-centrar">
				<p><a class="btn btn-primary btn-lg" href="http://evcoopteboy.esy.es/cursos" role="button">Ir a la plataforma</a></p>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>