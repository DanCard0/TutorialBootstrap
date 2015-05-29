<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">

		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventana">Mostrar modal</button>

		<br>

		<a href="#" data-toggle="modal" data-target="#ventana">Abrir ventana modal</a>

		<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span> <span class="sr-only">Cerrar</span></button>
						<h4 class="modal-title" id="ModalLabel">Título de la ventana</h4>
					</div>

					<div class="modal-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui. Proin auctor, odio at finibus dignissim, urna ipsum sodales dui, sit amet tempor est diam sed est. Etiam justo lacus, convallis sed nunc vitae, pretium aliquet velit. Nunc non tristique mauris. Sed at sem orci. Nunc fringilla neque vitae diam euismod, elementum finibus mi volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
					</div>

					<div class="modal-footer">
						<button typr="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button typr="submit" class="btn btn-primary">Guardar cambios</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<br><br><br>
	<a href="componentes.php">Anterior ejemplo | </a>
	<a href="dropdown.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>