<?php

require ('conexion.php');

$nombre_pan=$_POST['nombre_pan'];
$cantidad_de_pan=$_POST['cantidad_de_pan'];
$cantidad_vendida=$_POST['cantidad_vendida'];
$precio=$_POST['precio'];
$query="INSERT INTO ventas (nombre_pan,cantidad_de_pan,cantidad_vendida,precio) VALUES ('$nombre_pan','$cantidad_de_pan','$cantidad_vendida','$precio')";
$resultado=$mysqli->query($query);

?>

<html>

	<head>
		<title>Guardar Registros de ventas</title>
	</head>
	<body>
		<center>
<?php if($resultado>0){ ?>
		<H1>Registros guardados</H1>
		<?php }else{ ?>
		<H1>Error al guardar datos</H1>
<?php		} ?>

<p></p>

<a href="listapan.php">Regresar</a>
<a href="pidepan.html">Nuevo registro</a>
		</center>
	</body>
</html>