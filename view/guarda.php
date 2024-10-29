<?php
	
	require 'model/conexion.php';
	
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$Apellido = $mysqli->real_escape_string($_POST['Apellido']);
	$Identificacion = $mysqli->real_escape_string($_POST['Identificacion']);
	$Fecha_de_Nacimiento = $mysqli->real_escape_string($_POST['Fecha_de_Nacimiento']);
	$Correo = $mysqli->real_escape_string($_POST['Correo']);
	
	$sql = "INSERT INTO usuarios (nombre, Identificacion, Apellido, Fecha_de_Nacimiento, Correo, activo) VALUES ('$nombre', '$Identificacion','$Apellido', '$Fecha_de_Nacimiento', '$Correo', 1)";
	//echo $sql;
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO AGREGADO';
		
		} else {
		echo 'ERROR AL AGREGAR REGISTRO';
	}
	
	echo "<br/><a href='index.php' class='btn btn-primary'>Regresar</a>";
	
?>

