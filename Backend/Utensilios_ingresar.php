<?php 

    require('conexion.php');

    $IDHER = $_POST['idher'];
    $Nombre = $_POST['nombreh'];
    $Precio = $_POST['precio'];
    $Cantidad = $_POST['cantidad'];


    $query = "INSERT INTO utensilios( idher, nombre, precio, cantidad)
    VALUES('$IDHER', '$Nombre', '$Precio', '$Cantidad')";

    $resultado = $mysqli->query($query);

 if($resultado){ 
         //se usa la funcion json_encode para enviarlo al js 
         echo /*json_encode(*/'Datos Guardados Correctamente <br>'/*)*/;
         echo $IDHER . " - " . $Nombre . " - $" . $Precio . " - " . $Cantidad;        
    }else{ 
         echo /*json_encode(*/'Error al guardar los datos'/*)*/;
     }
     ?>
     <br><br><br><a href="../utensilios.html">Atras</a>
