<?php 
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../estilos/estilo_login_administrador.css">
	<title>Administrador</title>
</head>
<body>
	<form action="../php/login_administrador.php" method="post">
		<div class="form">
			<h1>Login Administrador</h1>
			<div class="grupo">
				<input type="text" name="nombre" id="" required=""><span class="barra"></span>
				<label for="">Nombre</label>
			</div>
			<div class="grupo">
				<input type="password" name="contraseña" id="" required=""><span class="barra"></span>
				<label for="">Contraseña</label>
			</div>
			<div class="boton-1"><button class="boton">Ingresar</button></div>
		</div>
	</form>
</body>
</html>