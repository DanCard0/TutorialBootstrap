<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario - login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style>
		body {
			padding-top: 40px;
			padding-bottom: 40px;
		}

		.login {
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}

		#sha {
			max-width: 340px;
			-webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
			-moz-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
			box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
			border-radius: 6%;
		}

		#avatar {
			width: 96px;
			height: 96px;
			margin: 0px auto 10px;
			display: block;
			border-radius: 50%;
		}
	</style>

</head>
<body>

	<div class="container well" id="sha">
		<div class="row">
			<div class="col-xs-12">
				<img src="img/avatar.png" class="img-responsive" id="avatar">
			</div>
		</div>

		<!-- OJO, este formulario de login verifica los datos introducidos gracias al código que se encuentra
		en el archivo check.php-->
		<form class="login" action="check.php" method="POST">
			<div class="form-group">
				<input type="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
			</div>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>

			<div class="checkbox">
				<label class="chackbox">
					<input type="checkbox" value ="1" name="remember">No cerrar sesión
				</label>
				<p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
			</div>
		</form>
	</div>


	<br><br><br>
	<a href="formulario1.php">Anterior ejemplo | </a>
	<a href="formulario2.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>