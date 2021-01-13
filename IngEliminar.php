<?php 
	
	require('conexion.php');
	
	$CodigoIng=$_GET['CodigoIng'];
// aquí podemos agregar un ventana de Alerta para confirmar la eliminación del registro
	$query="DELETE FROM ingredientes WHERE CodigoIng ='$CodigoIng'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Registro</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Registro Eliminado Permanentemente</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Registro</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="IngLista.php">Regresar</a>
			
		</center>
	</body>
</html>