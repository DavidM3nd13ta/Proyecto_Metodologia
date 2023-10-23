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

    $insertar="INSERT INTO cliente VALUES ('$cedula', '$nombre', '$apellido', '$servicio', '$telefono', '$direccion', '$fechaI', '$fechaF', '$des', '$valorP', '$abn', '$rest')";

    $insertarRespuesta=mysqli_query($conexion, $insertar);

    if($insertarRespuesta){
        header("location:../vista/login_administrador.php");
    }else{
        header("location:../Los_Taticos.php");
    }