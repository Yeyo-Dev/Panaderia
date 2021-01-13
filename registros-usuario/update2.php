<?php
	echo "UPDATE registro SET nombre='".$_POST['nombre']."',
	appaterno= '".$_POST['appaterno']."', 
	apmaterno='".$_POST['apmaterno']."',
	fecnac'".$_POST['fecnac']."',
	telefono'".$_POST['telefono']."',
	calle'".$_POST['calle']."',
	colonia'".$_POST['colonia']."',
	ciudad'".$_POST['ciudad']."',
	estado'".$_POST['estado']."',
	cp'".$_POST['cp']."',
	numext'".$_POST['numext']."',
	numint'".$_POST['numint']."',
	usertype'".$_POST['usertype']."' 
	WHERE folio='".$_POST['folio']."' ";
	

	updateUser($_POST['nombre'], 
	$_POST['appaterno'], 
	$_POST['apmaterno'],
	$_POST['fecnac'],
	$_POST['telefono'],
	$_POST['calle'],
	$_POST['colonia'],
	$_POST['ciudad'],
	$_POST['estado'],
	$_POST['cp'],
	$_POST['numext'],
	$_POST['numint'],
	$_POST['usertype'],
	$_POST['folio']);

	function updateUser($nombre, $appaterno, $apmaterno,$fecnac,$telefono,$calle,$colonia,$ciudad,$estado,$cp,$numext,$numint,$usertype, $folio)
	{
		include 'conexion.php';
		$sentencia="UPDATE registro SET nombre='".$nombre."',
		appaterno= '".$appaterno."', 
		apmaterno='".$apmaterno."',
		fecnac='".$fecnac."',
		telefono='".$telefono."',
		calle='".$calle."',
		colonia='".$colonia."',
		ciudad='".$ciudad."',
		estado='".$estado."',
		cp='".$cp."',
		numext='".$numext."',
		numint='".$numint."',
		usertype='".$usertype."' 
		WHERE folio='".$folio."' ";
		mysqli_query($mysqli, $sentencia);
	}
?>

<script type="text/javascript">
	alert("Registro Modificado exitosamente");
	window.location.href='index.php';
</script>