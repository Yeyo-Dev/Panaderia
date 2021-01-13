<?php

require ('conexion.php');

$matric=$_POST['matric'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];

$query="INSERT INTO utensilios (matric,nombre,precio,cantidad) VALUES ('$matric','$nombre','$precio','$cantidad')";
$resultado=$mysqli->query($query);

?>

<html>

	<head>
		<title>Guardar Registro</title>
	</head>
	<body>
		<center>
<?php if($resultado>0){ ?>
		<H1>Datos Guardadas</H1>
		<?php }else{ ?>
		<H1>Error al guardar datos</H1>
<?php		} ?>

<p></p>

<a href="javascript:window.history.back()";>Regresar</a>
		</center>
	</body>
</html>