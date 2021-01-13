<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel = "stylesheet" href = "main.css">
</head>
<body>
    <?php
        $server = "localhost";
        $usuario = "root";
        $contraseña = "";
        $bd = "panaderia";

        $conexion = mysqli_connect($server,$usuario,$contraseña,$bd)
        or die ("Error en la conexión"); 
       
        $folio = $_POST['txtFolio'];
        $nombre = $_POST['txtNombre'];
        $appat = $_POST['txtApPa'];
        $apmat = $_POST['txtApMa'];
        $fecnac = $_POST['fecNac'];
        $calle = $_POST['txtCalle'];
        $colonia = $_POST['txtColonia'];
        $cp = $_POST['txtCp'];
        $ciudad = $_POST['txtCiudad'];
        $estado = $_POST['txtEstado'];
        $numext = $_POST['txtNumExt'];
        $numint = $_POST['txtNumInt'];
        $telefono = $_POST['txtTel'];
        $usertype = $_POST['cmbUsertype'];
/*
        echo 'folio: ' . $folio . ' tamano: '. strlen($folio);
        echo "<br>";
        echo "nombre: " . $nombre. ' tamano: '. strlen($nombre);
        echo "<br>";
        echo "appat: " . $appat. ' tamano: '. strlen($appat);
        echo "<br>";
        echo "apmat: " . $apmat. ' tamano: '. strlen($apmat);
        echo "<br>";
        echo "fecnac: " . $fecnac. ' tamano: '. strlen($fecnac);
        echo "<br>";
        echo "calle: " . $calle. ' tamano: '. strlen($calle);
        echo "<br>";
        echo "colonia: " . $colonia. ' tamano: '. strlen($colonia);
        echo "<br>";
        echo "cp: " . $cp. ' tamano: '. strlen($cp);
        echo "<br>";
        echo "ciudad: " . $ciudad. ' tamano: '. strlen($ciudad);
        echo "<br>";
        echo "estado: " . $estado. ' tamano: '. strlen($estado);
        echo "<br>";
        echo "numext: " . $numext. ' tamano: '. strlen($numext);
        echo "<br>";
        echo "numint: " . $numint. ' tamano: '. strlen($numint);
        echo "<br>";
        echo "telefono: " . $telefono. ' tamano: '. strlen($telefono);
        echo "<br>";
        echo "usertype: " . $usertype. ' tamano: '. strlen($usertype);
  */      

        $insertar = "INSERT into registro values ('$folio', '$nombre', '$appat', '$apmat', '$fecnac','$telefono', '$calle', 
        '$colonia',  '$ciudad', '$estado','$cp', '$numext', '$numint',  '$usertype')";

        $resultado = mysqli_query($conexion, $insertar)
            or die ("<center><h1>Error al insertar los registros</center></h1>");

        mysqli_close($conexion);
        echo "<center><h1>Datos Guardados Correctamente</h1></center>"; 
    ?>
    <center>
    <a href = "index.php"><input type = "button" class = "btn btn success" value = "Regresar al Index"></a>
    <a href ="formRegistro.php"><input type="button" class = "button" value = "Crear nuevo"></a>
    </center>
</body>
</html>