<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Grilla visible y oculto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 well">Contenido 1</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 well">Contenido 2</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 visible-lg well">Contenido 3 es visible con >1200px</div>
		</div>

		<div class="row">
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 well">Contenido 1</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 well">Contenido 2</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 hidden-lg well">Contenido 3 es invisible con >1200px</div>
		</div>
	</div>


	<br><br><br>
	<a href="grilla3.php">Anterior ejemplo | </a>
	<a href="grilla-clearfix.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>