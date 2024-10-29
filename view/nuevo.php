<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css">
		
		<title>Empresa</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Crear Usuario</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<form id="registro" name="registro" method="POST" action="guarda.php" autocomplete="off">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre" autofocus required>
						</div>

						<div class="form-group">
							<label for="nombre">Apellido</label>
							<input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Introduce el apellido" required>
						</div>
						
						<div class="form-group">
							<label for="Identificacion">Identificacion</label>
							<input type="text" class="form-control" id="Identificacion" name="Identificacion" placeholder="Introduce la Identificacion" required>
						</div>
						
						<div class="form-group">
							<label for="Fecha_de_Nacimiento">Fecha de nacimiento</label>
							<input type="date" class="form-control" id="Fecha_de_Nacimiento" name="Fecha_de_Nacimiento" placeholder="Introduce la fecha nacimiento" required>
						</div>
						
						<div class="form-group">
							<label for="Correo">Correo</label>
							<input type="text" class="form-control" id="Correo" name="Correo" placeholder="Introduce el correo" required>
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
		<script src="../assets/js/jquery-3.4.1.min.js" ></script>
		<script src="../assets/js/bootstrap.min.js" ></script>
	</body>
</html>				