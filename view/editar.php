<?php

require 'model/conexion.php';

$id = $mysqli->real_escape_string($_GET['id']);

$sql = "SELECT nombre, Apellido, Identificacion, Fecha_de_Nacimiento, Correo FROM usuarios WHERE id=$id LIMIT 1";
$resultado = $mysqli->query($sql);

$fila = $resultado->fetch_assoc();



?>

<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<title>Empresa</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<h1>Modificar Usuario</h1>
		</div>

		<div class="row">
			<div class="col-md-8">
				<form id="registro" name="registro" method="POST" action="editar2.php" autocomplete="off">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre" value="<?php echo $fila['nombre']; ?>" autofocus required>
						<input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
					</div>

					<div class="form-group">
						<label for="Apellido">Apellido</label>
						<input type="text" class="form-control" id="nombre" name="Apellido" placeholder="Introduce el Apellido" value="<?php echo $fila['Apellido']; ?>" required>
						<input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
					</div>

					<div class="form-group">
						<label for="Identificacion">Identificacion</label>
						<input type="text" class="form-control" id="Identificacion" name="Identificacion" placeholder="Introduce el Identificacion" value="<?php echo $fila['Identificacion']; ?>" required>
					</div>

					<div class="form-group">
						<label for="Fecha_de_Nacimiento">Fecha de nacimiento</label>
						<input type="date" class="form-control" id="Fecha_de_Nacimiento" name="Fecha_de_Nacimiento" value="<?php echo $fila['Fecha_de_Nacimiento']; ?>" placeholder="Introduce la fecha nacimiento" required>
					</div>

					<div class="form-group">
						<label for="Correo">Correo</label>
						<input id="Correo" name="Correo" class="form-control" placeholder="Introduce el correo" required>
					</div>

					<div class="form-group">
						<button class="btn btn-primary" id="guarda" name="guarda" type="submit">Guarda</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>