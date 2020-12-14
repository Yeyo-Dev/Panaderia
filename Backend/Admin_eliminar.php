<?php 
	
	require('conexion.php');
	//error_reporting(0);	
	$id = $_POST['id'];

 	$query='DELETE FROM contabilidad WHERE idcuentas=\''.$id.'\'';

	$resultado=$mysql->query($query);

	if($resultado>0){
				
			
		echo "Registro Eliminado Permanentemente";
				
	}else{
		
		echo "Error al Eliminar Registro";
				
	} 
			
?>