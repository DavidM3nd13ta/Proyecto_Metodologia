<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../estilos/estilo_tabla.css">
	<title>Tabla</title>
</head>
<body>
	<h1>Control de datos usuario</h1>
	<div class="boton-2"><a href="../contenido.html" class="boton2">Inicio</a></div>
	<table border>
		<thead>
			<tr>
				<th>Cedula</th>
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
				<th>Metodo --</th>
			</tr>
		</thead>
			<?php 
				include("../php/conexion.php");
				$selecciondatos="SELECT*FROM cliente";
				$datos=mysqli_query($conexion, $selecciondatos);
				while($mostrardatos=mysqli_fetch_assoc($datos)){	?>
		<tbody>
			<tr>
				<td><?php echo $mostrardatos['Cedula'];?></td>
				<td><?php echo $mostrardatos['Nombre'];?></td>
				<td><?php echo $mostrardatos['Apellido'];?></td>
				<td><?php echo $mostrardatos['TipoServicio'];?></td>
				<td><?php echo $mostrardatos['Telefono'];?></td>
				<td><?php echo $mostrardatos['Direccion'];?></td>
				<td><?php echo $mostrardatos['FechaInicio'];?></td>
				<td><?php echo $mostrardatos['FechaFin'];?></td>
				<td><?php echo $mostrardatos['Descripcion'];?></td>
				<td><?php echo $mostrardatos['ValorPrecio'];?></td>
				<td><?php echo $mostrardatos['Abono'];?></td>
				<td><?php echo $mostrardatos['Restante'];?></td>
				<td><a class="actualizar" href="actualizar_usuario.php?ID=<?php echo $mostrardatos['Cedula'];?>">Actualizar</a></td>
				<td><a class="eliminar" href="eliminar_usuario.php?ID=<?php echo $mostrardatos['Cedula'];?>">Eliminar</a></td>
			</tr>
		</tbody>				
		<?php }?>
	</table>
	<script type="text/javascript" src="../js/confirmacion.js"></script>
</body>
</html>