<?php
// Archivo ver-registro.php
// Permite realizar un listado en pantalla de todos los registros de la tabla

require_once ("conexion.php");

$sql = "SELECT * FROM utensilios ORDER BY idher ASC";
$res=$mysqli->query($sql);
$tother = mysqli_num_rows($res);

if ($tother>0) {
    echo "<center>";
    echo '<table border>';
    echo "<tr>";
		echo "<td><strong>ID</strong></td><br>";
		echo "<td>Nombre:</td><br>";
		echo "<td>Precio:</td><br>";
		echo "<td>Cantidad:</td><br>";
		echo "</tr>";
		
	while ($rowher = mysqli_fetch_array($res)) {
        echo "<tr>";
		echo "<td><strong>".$rowher['idher']."</strong></td><br>";
		echo "<td>".$rowher['nombre']."</td><br>";
		echo "<td>$".$rowher['precio']."</td><br>";
		echo "<td>".$rowher['cantidad']."</td><br>";
        echo "</tr>";
	}
    echo "</table>";
    echo "</center>";

}

?>