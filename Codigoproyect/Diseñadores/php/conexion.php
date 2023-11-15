<?php
	$servidor="localhost";
    $usuario="root";
    $contraseña="";
    $bd="facturacion";

    $conexion=new mysqli($servidor, $usuario, $contraseña, $bd);

    /*
    if($conexion->connect_errno){
        echo "Fallo al conectar a la base de datos :C";
    }else{
        echo "Conexion exitosa :D";
    }
    */