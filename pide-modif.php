<?php
	
	require('conexion.php');
	
	$nombre_pan=$_GET['nombre_pan'];
	
	$query="SELECT cantidad_de_pan, cantidad_vendida, precio FROM ventas WHERE nombre_pan='$nombre_pan'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Registro de ventas</title>
	</head>
	<body>
		
		<center><h1>Registro de ventas</h1></center>
		
		<form name="modificar_calific" method="POST" action="hace-modific.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="nombre_pan" value="<?php echo $nombre_pan; ?>">
					<td width="20"><b>Cantidad de pan</b></td>
					<td width="30"><input type="text" name="cantidad_de_pan" size="25" value="<?php echo $row['cantidad_de_pan']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Cantidad vendida</b></td>
					<td><input type="text" name="cantidad_vendida" size="25" value="<?php echo $row['cantidad_vendida']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Precio</b></td>
					<td><input type="text" name="precio" size="25" value="<?php echo $row['precio']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
