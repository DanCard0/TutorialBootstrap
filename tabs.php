<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Título</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
		body {
			padding-top: 70px;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-10">
				<!--Si se quiere un efecto de pestañas, se reemplaza nav-pills por nav-tabs-->
				<ul class="nav nav-pills">
					<li class="active"><a href="#home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
					<li><a href="#profile" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
					<li><a href="#messages" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-envelope"></span>Mensajes</a></li>
					<li><a href="#settings" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>Configuración</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane fade in active" id="home">
						<br>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere nunc sit amet faucibus tristique. In non ornare odio. Pellentesque facilisis felis vel nibh tincidunt, vel condimentum lorem sodales. Donec massa justo, interdum et auctor eu, efficitur eu elit. Nulla facilisi. Sed quis eros tincidunt, sollicitudin dui ut, maximus arcu. Maecenas ultrices magna quis mauris interdum, posuere fringilla sapien accumsan. Donec condimentum dui quis dolor feugiat, porta interdum felis mattis. Aenean nec dolor mollis, condimentum ante id, dapibus purus. Curabitur tellus nisl, feugiat ut finibus sit amet, iaculis quis odio.
					</div>

					<div class="tab-pane fade" id="profile">
						<br>
						<form class="form-horizontal">
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="formGroup">Nombre</label>
								<div class="col-sm-4">
									<input class="form-control" type="text" id="formGroup">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="formGroup">Email</label>
								<div class="col-sm-4">
									<input class="form-control" type="text" id="formGroup">
								</div>
							</div>

							<br>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="formGroup"></label>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>Guardar</button>
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane fade" id="messages">
						<br>

						<ul class="list-group">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi lao risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
					</div>

					<div class="tab-pane fade" id="settings">
						<br>

						<div class="panel panel-default">
							<div class="panel-heading">Panel configuración</div>
							<div class="panel-body">
								Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas at libero sit amet enim mollis efficitur vel quis velit. Morbi elementum nec ligula ut faucibus. Donec lacus ante, venenatis vitae lectus ut, consequat dapibus felis. Donec rhoncus quis libero non consectetur. Phasellus finibus egestas neque, sed convallis quam aliquet sed. Sed tincidunt leo non massa molestie, et eleifend metus venenatis. Phasellus dignissim sed sem nec molestie. Ut cursus mauris at nibh gravida iaculis. Vivamus pellentesque sit amet risus sed venenatis. Donec mi ante, tincidunt eu blandit sed, dictum vitae tortor. Mauris felis leo, semper eu magna condimentum, blandit euismod eros.
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<br><br><br>
	<a href="navbar.php">Anterior ejemplo | </a>
	<a href="thumbnail.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>