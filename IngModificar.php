<?php 
	
	require('conexion.php');
	
	$CodigoIng=$_POST['CodigoIng'];
	$NombreIng=$_POST['NombreIng'];
	$CantidadIng=$_POST['CantidadIng'];
	$PesoCUIng=$_POST['PesoCUIng'];
	$PresioCUIng=$_POST['PresioCUIng'];
	$FechaCadIng=$_POST['FechaCadIng'];
	
	$query="UPDATE ingredientes SET CodigoIng='$CodigoIng', NombreIng='$NombreIng', CantidadIng='$CantidadIng', PesoCUIng='$PesoCUIng', PresioCUIng='$PresioCUIng', FechaCadIng='$FechaCadIng' WHERE CodigoIng='$CodigoIng'";

	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Ingredientes</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Registro Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Registro</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="IngLista.php">Regresar</a>
			
		</center>
	</body>
</html>
			