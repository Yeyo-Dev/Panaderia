
<?php

require ('conexion.php');

$CodigoIng=$_POST['CodigoIng'];
$NombreIng=$_POST['NombreIng'];
$CantidadIng=$_POST['CantidadIng'];
$PesoCUIng=$_POST['PesoCUIng'];
$PresioCUIng=$_POST['PresioCUIng'];
$FechaCadIng=$_POST['FechaCadIng'];

$query="INSERT INTO ingredientes (CodigoIng, NombreIng, CantidadIng, PesoCUIng, PresioCUIng, FechaCadIng)
 VALUES ('$CodigoIng','$NombreIng','$CantidadIng','$PesoCUIng','$PresioCUIng','$FechaCadIng')";
$resultado=$mysqli->query($query);

?>

<html>

	<head>
		<title>Guardar Datos en Tabla</title>
	</head>
	<body>
		<center>
<?php if($resultado>0){ ?>
		<H1>Datos Guardados Correctamente</H1>
		<?php }else{ ?>
		<H1>Error al guardar los datos</H1>
<?php	} ?>

<p></p>

<a href="IngAltas.html">Regresar</a>
		</center>
	</body>
</html>