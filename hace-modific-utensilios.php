<?php 
	
	require('conexion.php');
	
	$matric=$_POST['matric'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$cantidad=$_POST['cantidad'];
	
	$query="UPDATE utensilios SET matric='$matric', nombre='$nombre', precio='$precio', cantidad='$cantidad' WHERE matric='$matric'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar</title>
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
			
			<a href="./listadoutensilios.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				