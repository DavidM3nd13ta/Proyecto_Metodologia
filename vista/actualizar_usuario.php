<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../estilos/estilo_actualizar_eliminar.css">
	<title>Tabla</title>
</head>
<body>
	<h1>Control de datos usuario</h1>
	<form action="../php/actualizar.php" method="post">
		<table border>
			<thead>
				<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>tipo Servicio</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Fecha Inicio</th>
				<th>Fecha Fin</th>
				<th>Descripcion</th>
				<th>Valor Precio</th>
				<th>Abono</th>
				<th>Restante</th>
				<th>Metodo ++</th>
				</tr>
			</thead>
				<?php
					include("../php/conexion.php");
					$cedula=$_GET['Cedula'];
					$actualizar="SELECT*FROM cliente WHERE Cedula='$cedula'";
					$datos=mysqli_query($conexion, $actualizar);
					while($mostrar=mysqli_fetch_assoc($datos)){	?>
			<tbody>
				<tr>
					<input type="hidden" class="Nn" value="<?php echo $mostrar['Cedula'];?>" name="cedula">
					<td><input type="text" class="Nn" value="<?php echo $mostrar['Nombre'];?>" name="nombre"></td>
					<td><input type="text" class="Aa" value="<?php echo $mostrar['Apellido'];?>" name="apellido"></td>
					<td><input type="text" class="Tt" value="<?php  echo $mostrar['TipoServicio'];?>" name="tipoServicio"></td>
					<td><input type="num" class="Dd" value="<?php  echo $mostrar['Telefono'];?>" name="telefono"></td>
					<td><input type="text" class="Cc" value="<?php  echo $mostrar['Direccion'];?>" name="direccion"></td>
					<td><input type="date" class="Nn" value="<?php echo $mostrar['FechaInicio'];?>" name="fechaInicio"></td>
					<td><input type="date" class="Aa" value="<?php echo $mostrar['FechaFin'];?>" name="fechaFin"></td>
					<td><input type="text" class="Tt" value="<?php  echo $mostrar['Descripcion'];?>" name="descripcion"></td>
					<td><input type="number" class="Dd" value="<?php  echo $mostrar['ValorPrecio'];?>" name="valorPrecio"></td>
					<td><input type="number" class="Cc" value="<?php  echo $mostrar['Abono'];?>" name="abono"></td>
					<td><input type="number" class="Dd" value="<?php  echo $mostrar['Restante'];?>" name="restante"></td>
					<td><input type="submit" value="Actualizar" class="actualizar">
				</tr>	
			</tbody>				
			<?php }?>
		</table>
	</form>
	<script type="text/javascript" src="../js/confirmacion_actualizar.js"></script>
</body>
</html>
