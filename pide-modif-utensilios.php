<?php
	
	require('conexion.php');
	
	$matric=$_GET['matric'];
	
	$query="SELECT matric, nombre, precio, cantidad  FROM utensilios WHERE matric='$matric'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Utensilios</title>
	</head>
	<body>
		
		<center><h1>Modificar Utensilios</h1></center>
		
		<form name="modificar_calific" method="POST" action="hace-modific-utensilios.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="matric" value="<?php echo $matric; ?>">
					<td width="20"><b>Nombre</b></td>
					<td width="30"><input type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Precio</b></td>
					<td><input type="text" name="precio" size="25" value="<?php echo $row['precio']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Cantidad</b></td>
					<td><input type="text" name="cantidad" size="25" value="<?php echo $row['cantidad']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
