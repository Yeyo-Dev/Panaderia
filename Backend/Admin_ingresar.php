<?php 

    require('conexion.php');
    require('Admin_functions.php');

    $IDCuentas = $_POST['Cuentas'];
    $Cuentas = buscarcuentasporid($IDCuentas);
    $Valor = $_POST['valor'];
    $Fecha = $_POST['Fecha'];


    $query = "INSERT INTO contabilidad( idcuentas, cuentas, valor, fecha)
    VALUES('$IDCuentas', '$Cuentas', '$Valor', '$Fecha')";

    $resultado = $mysql->query($query);

 if($resultado){ 
         //se usa la funcion json_encode para enviarlo al js 
         echo /*json_encode(*/'Datos Guardados Correctamente <br>'/*)*/;
         echo "'" . $IDCuentas . "' - '" . $Cuentas . "' - '$" . $Valor . "' - '" . $Fecha . "'";        
    }else{ 
         echo 'Error al guardar los datos';
     }
?>