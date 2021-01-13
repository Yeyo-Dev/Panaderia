<?php
	
	require('conexion.php');
	
	$CodigoIng=$_GET['CodigoIng'];
	
	$query="SELECT NombreIng, CantidadIng, PesoCUIng, PresioCUIng, FechaCadIng FROM ingredientes WHERE CodigoIng='$CodigoIng'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Ingredientes</title>
	</head>
	<body>
		
		<center><h1>Modificar Ingredientes</h1></center>
		
		<form name="modificar_ing" method="POST" action="IngModificar.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="CodigoIng" value="<?php echo $CodigoIng; ?>">
					<td width="20"><b>Nombre</b></td>
					<td width="30"><input type="text" name="NombreIng" size="25" value="<?php echo $row['NombreIng']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Cantidad</b></td>
					<td><input type="text" name="CantidadIng" size="25" value="<?php echo $row['CantidadIng']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Peso</b></td>
					<td><input type="text" name="PesoCUIng" size="25" value="<?php echo $row['PesoCUIng']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Presio</b></td>
					<td><input type="text" name="PresioCUIng" size="25" value="<?php echo $row['PresioCUIng']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Fecha de Caducidad</b></td>
					<td><input type="text" name="FechaCadIng" size="25" value="<?php echo $row['FechaCadIng']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
