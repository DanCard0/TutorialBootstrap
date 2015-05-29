<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Elementos del formulario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">
		<form>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="Digita tu email" name="email">
			</div>

			<div class="form-group">
				<label for="password">Contraseña</label>
				<input type="password" class="form-control" id="password" placeholder="Contraseña">
			</div>

			<div class="form-group">
				<label for="File">Archivo</label>
				<input type="file" id="File">
				<p class="help-block">Texto alternativo</p>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox">Recordarme
				</label>
			</div>

			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>opcion 1
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">opcion 2
				</label>
			</div>

			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	</div>


	<br><br><br>
	<a href="grilla-push.php">Anterior ejemplo | </a>
	<a href="login.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>