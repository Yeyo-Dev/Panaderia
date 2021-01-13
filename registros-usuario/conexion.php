<?php

//$conexion =mysql_connect("localhost","root","");
//mysql_select_db("panaderia",$conexion);





$mysqli=new mysqli("localhost", "root", "", "panaderia");
//servidor, usuario, contraseña, base de datos

if (mysqli_connect_errno()) {
echo 'error al conectar:', mysqli_connect_error();
exit();
}

?>