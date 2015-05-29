<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Varios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">
		<h3>Tablas</h3>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				</tr>
			</thead>

			<tbody>
				<tr class="success">
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr class="danger">
					<td>2</td>
					<td>Jacob</td>
					<td>Thorn</td>
					<td>@fat</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Larry</td>
					<td>The bird</td>
					<td>@hatter</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Daniel</td>
					<td>Cardozo</td>
					<td>@dan_card</td>
				</tr>
				<tr>
					<td>5</td>
					<td>María</td>
					<td>Hernández</td>
					<td>@marh</td>
				</tr>
			</tbody>
		</table>

		<h3>Tablas responsivas</h3>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="row">
			<h3>Imágenes</h3>
			<div class="col-md-4 responsive"><img src="img/sexy.jpg" alt="..." class="img-rounded"></div>
			<div class="col-md-4 responsive"><img src="img/sexy.jpg" alt="..." class="img-circle"></div>
			<div class="col-md-4 responsive"><img src="img/sexy.jpg" alt="..." class="img-thumbnail"></div>
		</div>

		<h3>Texto en colores</h3>
		<p class="text-muted">Éste es un ejemplo de un texto a color</p>
		<p class="text-primary">Éste es un ejemplo de un texto a color</p>
		<p class="text-success">Éste es un ejemplo de un texto a color</p>
		<p class="text-info">Éste es un ejemplo de un texto a color</p>
		<p class="text-warning">Éste es un ejemplo de un texto a color</p>
		<p class="text-danger">Éste es un ejemplo de un texto a color</p>

		<br>

		<p class="bg-primary">Éste es un ejemplo de un texto con fondo a color</p>
		<p class="bg-success">Éste es un ejemplo de un texto con fondo a color</p>
		<p class="bg-info">Éste es un ejemplo de un texto con fondo a color</p>
		<p class="bg-warning">Éste es un ejemplo de un texto con fondo a color</p>
		<p class="bg-danger">Éste es un ejemplo de un texto con fondo a color</p>

		<h3>Alineación</h3>
		<div class="row">
			<div class="pull-left"><img src="img/sexy.jpg" alt="..." class="img-rounded"></div>
			<div class="pull-right"><img src="img/sexy.jpg" alt="..." class="img-rounded"></div>
		</div>

		<div class="row">
			<h3>Alineación textos</h3>
			<p class="text-left">Left aligned text</p>
			<p class="text-center">Center aligned text</p>
			<p class="text-right">Right aligned text</p>
			<p class="text-justify">Justified text</p>
			<p class="text-nowrap">No wrap aligned text</p>
		</div>
	</div>


	<br><br><br>
	<a href="carousel.php">Anterior ejemplo | </a>
	<a href="proyecto-gmail.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>