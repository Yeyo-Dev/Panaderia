<?php 
	
	require('conexion.php');
	//id, cuenta, valor, fecha
   
	
    $id = $_POST['id'];
    $cuenta = $_POST['cuenta'];
    $valor = $_POST['valor'];
    $fecha = $_POST['fecha'];

	
	$query = "UPDATE contabilidad SET idcuentas='$id', cuentas='$cuenta', valor='$valor', fecha='$fecha' WHERE idcuentas='$id'";
	
	$resultado = $mysqli->query($query);
    
if($resultado > 0){
    echo "Modificacion Realizada";
}else{
    echo "Error";
}

?>
