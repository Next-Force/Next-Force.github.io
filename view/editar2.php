<?php
	
	require '../conexion.php';
	
	$id = $mysqli->real_escape_string($_POST['id']);
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$Apellido = $mysqli->real_escape_string($_POST['Apellido']);
	$Identificacion = $mysqli->real_escape_string($_POST['Identificacion']);
	$Fecha_de_Nacimiento = $mysqli->real_escape_string($_POST['Fecha_de_Nacimiento']);
	$Correo = $mysqli->real_escape_string($_POST['Correo']);
	
	$sql = "UPDATE usuarios SET nombre='$nombre', Apellido='$Apellido', Identificacion='$Identificacion',Fecha_de_Nacimiento='$Fecha_de_Nacimiento',Correo='$Correo' WHERE id=$id ";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO MODIFICADO';
		} else {
		echo 'ERROR AL MODIFICAR REGISTRO';
	}
	
	echo "<br/><a href='index.php' class='btn btn-primary'>Regresar</a>";
	
?>

