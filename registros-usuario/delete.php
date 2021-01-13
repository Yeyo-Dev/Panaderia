<?php
	include "conexion.php";

	//EliminarProducto($_GET['folio']);
	$sentencia="DELETE FROM registro WHERE folio='".$_GET['folio']."' ";
	mysqli_query($mysqli, $sentencia);
	/*function EliminarProducto($folio)
	{
		$sentencia="DELETE FROM registro WHERE folio='".$folio."' ";
		mysqli_query($mysqli, $sentencia);
	}*/
?>

<script type="text/javascript">
	alert("Registro Eliminado exitosamente");
	window.location.href='index.php';
</script>