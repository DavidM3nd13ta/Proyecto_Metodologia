<?php
include("../php/conexion.php");

	$ID=$_GET["ID"];

	//Eliminar datos de usuarios
	$eliminar="DELETE FROM usuario WHERE ID_Usuario='$ID'";

	$c=new conectar();
	$conexion=$c->conexion();

	$datos=mysqli_query($conexion,$eliminar);

	if($datos){
		header("location:../vista/control_datos.php");
	}else{
		echo "<h1>No se pudo registrar el</h1>";
	}