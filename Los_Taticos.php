<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos/Estilo_principal.css">
	<title>Formulario registro</title>
</head>
<body>
	<form action="php/insertar.php" method="post">
		<div class="form">
			<h1>Facturacion</h1>
			<div class="grupo">
				<input type="number" name="cedula" id="" required=""><span class="barra"></span>
				<label for="">Cedula</label>
			</div>
			<div class="grupo">
				<input type="text" name="nombre" id="" required=""><span class="barra"></span>
				<label for="">Nombre</label>
			</div>
			<div class="grupo">
				<input type="text" name="apellido" id="" required=""><span class="barra"></span>
				<label for="">Apellido</label>
			</div>
			<div class="grupo">
				<input type="text" name="tipoServicio" id="" required=""><span class="barra"></span>
				<label for="">Tipo Servicio</label>
			</div>
			<div class="grupo">
				<input type="number" name="telefono" id="" required=""><span class="barra"></span>
				<label for="">Telefono</label>
			</div>
			<div class="grupo">
				<input type="text" name="direccion" id="" required=""><span class="barra"></span>
				<label for="">Direccion</label>
			</div>
			<div class="grupo">
				<input type="date" name="fechaInicio" id="" required=""><span class="barra"></span>
				<label for="">Fecha Inicio</label>
			</div>
			<div class="grupo">
				<input type="date" name="fechaFin" id="" required=""><span class="barra"></span>
				<label for="">Fecha Fin</label>
			</div>
			<div class="grupo">
				<input type="text" name="descripcion" id="" required=""><span class="barra"></span>
				<label for="">Descripcion</label>
			</div>
			<div class="grupo">
				<input type="number" name="valorPrecio" id="" required=""><span class="barra"></span>
				<label for="">Valor Precio</label>
			</div>
			<div class="grupo">
				<input type="number" name="abono" id="" required=""><span class="barra"></span>
				<label for="">Abono</label>
			</div>
			<div class="grupo">
				<input type="number" name="restante" id="" required=""><span class="barra"></span>
				<label for="">Restante</label>
			</div>
			<div class="boton-1"><button class="boton">Registrar</button></div>
		</div>
	</form>
</body>
</html>
