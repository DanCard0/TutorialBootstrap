<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tooltip - Popover</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">
		<h1>Tooltip - Popover</h1>
		<br> <br> <br>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip vista izquierda">Tooltip izquierda</button>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip vista inferior">Tooltip inferior</button>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip vista derecha">Tooltip derecha</button>
		<br><br><br>

		<a href="#" data-toggle="tooltip" data-placement="top" title="Buscar con Google">Buscar</a>
		<br><br>

		<a href="#" data-toggle="tooltip" id="ayuda" data-placement="right" title="¿Necesitas ayuda?">Ayuda</a>

		<h3>Popover</h3>
		<br><br><br>
		<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis">Popover izquierda</button>
		<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis">Popover superior</button>
		<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis">Popover inferior</button>
		<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis">Popover derecha</button>

		<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Título Popover" data-content="Vivamus sagittis Contenido Popover">Mostrar Popover</button>
		<br><br>

		<a href="#" data-toggle="popover" title="Título Popover" data-content="Vivamus sagittis Contenido Popover">Mostrar Popover</a>
	</div>


	<br><br><br>
	<a href="dropdown.php">Anterior ejemplo | </a>
	<a href="boton-acordeon.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<script type="text/javascript">
		$(function(){
			$('[data-toggle="tooltip"]').tooltip()
		})

		$('#ayuda').tooltip('show')

		$(function(){
			$('[data-toggle="popover"]').popover()
		})
	</script>
</body>
</html>