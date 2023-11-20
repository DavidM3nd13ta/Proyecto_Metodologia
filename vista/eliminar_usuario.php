<?php
	include("../php/conexion.php");

	$cedula=$_GET['Cedula'];

	$eliminar="DELETE FROM cliente WHERE Cedula='$cedula'";


	$resultadoEliminar=mysqli_query($conexion, $eliminar);

	if($resultadoEliminar){
		header("location:control_datos.php");
	}else{
		echo "<h1>No se pudo eliminar el registro :C</h1>";
	}