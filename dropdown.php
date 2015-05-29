<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Dropdown</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">
		<h1>Listas desplegables - Dropdown</h1>
		<h3>Lista en enlace</h3>
		<div class="dropdown">
			<a data-target="#" href="http://twitter.com/Dan_Card" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Daniel
				<span class="caret"></span>
			</a>

			<ul class="dropdown-menu">
				<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Mensajes</a></li>
				<li class="divider"></li>
				<li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configuración</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Salir</a></li>
			</ul>
		</div>

		<h3>Lista estilo botón</h3>
		<div class="dropdown">
			<button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Correo electrónico
				<span class="caret"></span>
			</button>

			<ul class="dropdown-menu">
				<li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Redactar</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Enviar</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Borrar</a></li>
				<li class="divider"></li>
				<li><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Papelera</a></li>
				<li class="disabled"><a href="#"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Span</a></li>
			</ul>
		</div>

		<h3>Listas desplegables en Navbar</h3>
		<nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<!--Si se visualiza desde un dispositivo móvil, el menú se convierte en un botón desplegable-->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ejemplo">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Tu proyecto</a>
				</div>

				<div class="collapse navbar-collapse bs-ejemplo-js-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Menu 1
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li class="#"></li>
								<li><a href="#">Item 4</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Menu 2
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li class="#"></li>
								<li><a href="#">Item 4</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li id="fat-menu" class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Menu 3
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a role="menuitem" href="#">Item 1</a></li>
								<li><a role="menuitem" href="#">Item 2</a></li>
								<li><a role="menuitem" href="#">Item 3</a></li>
								<li class="#"></li>
								<li><a href="#">Item 4</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>


	<br><br><br>
	<a href="modal.php">Anterior ejemplo | </a>
	<a href="tooltip-popover.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>