<?php
	$nombre=$_POST["nombre"];
	$contraseña=$_POST["contraseña"];

	if($nombre=="Cnma5587fami" && $contraseña==5587){
		header("location:../vista/control_datos.php");
	}else{
		header("location:../vista/login_administrador.php");
	}