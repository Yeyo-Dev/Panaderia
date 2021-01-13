<?php 
	
	require('conexion.php');
	
	$nombre_pan=$_GET['nombre_pan'];
// aquí podemos agregar un ventana de Alerta para confirmar la eliminación del registro
	$query="DELETE FROM ventas WHERE nombre_pan='$nombre_pan'";
	
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
			
			<a href="listapan.php">Regresar</a>
			
		</center>
	</body>
</html>