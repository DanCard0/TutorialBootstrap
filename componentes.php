<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Componentes varios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">
		<div class="page-header">
			<h1>Componentes <small>secundarios</small></h1>
		</div>

		<ol class="breadcrumb">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Paneles</a></li>
			<li class="active">Varios</li>
		</ol>

		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">Título del panel por defecto</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui.
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui.
					</div>
					<div class="panel-footer">Pie de panel</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Panel primario</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui.
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel-heading">Panel danger</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui.
					</div>
				</div>
			</div>

			<div class="col-sm-12">
				<div class="panel panel-warning">
					<div class="panel-heading">Panel warning</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui.
					</div>
				</div>
			</div>

			<div class="col-sm-12">
				<h1>Alerts</h1>
				<div class="alert alert-success" role="alert">(Success) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui.</div>

				<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign"></span> (Info) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui.</div>

				<div class="alert alert-warning" role="alert">(Warning) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui.</div>

				<div class="alert alert-danger" role="alert">(Danger) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet magna nec mauris luctus, ut consectetur orci iaculis. Praesent et facilisis dui. <button type ="button" class="btn btn-primary">Aceptar</button></div>
			</div>

			<div class="col-sm-12">
				<h1>Barras de progreso</h1>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="00" aria-valuemax="100" style="width: 60%;">
						<span class="sr-only">60% Complete</span>
					</div>
				</div>

				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="00" aria-valuemax="100" style="width: 20%">
						<span class="sr-only">20% Complete</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12">
				<div id="progressTimer"></div>
			</div>

			<div class="col-sm-8">
				<h1>Listas</h1>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">14</span>
						Cras justo mar
					</li>

					<li class="list-group-item">
						<span class="badge">13</span>
						Cras justo mar
					</li>

					<li class="list-group-item">
						<span class="badge">12</span>
						Cras justo mar
					</li>
					
					<li class="list-group-item">
						<span class="badge">11</span>
						Cras justo mar
					</li>
				</ul>
			</div>
		</div>

	</div>


	<br><br><br>
	<a href="thumbnail.php">Anterior ejemplo | </a>
	<a href="modal.php">Siguiente ejemplo</a>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<!--Script que permite la animación de la barra tipo progressTimer-->
	<script src="js/jquery.progressTimer.min.js"></script>
	<script>
		$("#progressTimer").progressTimer({
			timeLimit: 30,
			warningThreshold: 10,
			baseStyle: 'progress-bar-warning',
			warningStyle: 'progress-bar-danger',
			completeStyle: 'progress-bar-info',
			onFinish: function() {
				console.log("I'm done");
			}
		});
	</script>
</body>
</html>