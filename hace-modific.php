<?php 
	
	require('conexion.php');
	
	$nombre_pan=$_POST['nombre_pan'];
	$cantidad_de_pan=$_POST['cantidad_de_pan'];
	$cantidad_vendida=$_POST['cantidad_vendida'];
	$precio=$_POST['precio'];
	
	$query="UPDATE ventas SET nombre_pan='$nombre_pan', cantidad_de_pan='$cantidad_de_pan', cantidad_vendida='$cantidad_vendida', precio='$precio' WHERE nombre_pan='$nombre_pan'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar datos</title>
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
			
			<a href="listapan.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				