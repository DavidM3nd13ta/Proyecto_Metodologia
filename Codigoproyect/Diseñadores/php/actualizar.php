<?php
	include("conexion.php");

	$cedula=$_POST['cedula'];
    $nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
    $servicio=$_POST['tipoServicio'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
    $fechaI=$_POST['fechaInicio'];
    $fechaF=$_POST['fechaFin'];
    $des=$_POST['descripcion'];
    $valorP=$_POST['valorPrecio'];
    $abn=$_POST['abono'];
    $rest=$_POST['restante'];

	$actualizar="UPDATE cliente SET Nombre='$nombre', Apellido='$apellido', TipoServicio='$servicio', Telefono='$telefono', Direccion='$direccion', FechaInicio='$fechaI', FechaFin='$fechaF', Descripcion='$des', ValorPrecio='$valorP', Abono='$abn', Restante='$rest' WHERE Cedula='$cedula'";

	$resultadoActualizar=mysqli_query($conexion, $actualizar);

	if($resultadoActualizar){
		header("location:../vista/control_datos.php");
	}else{
		header("location:actualizar.php");
	}