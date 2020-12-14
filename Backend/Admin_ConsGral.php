<?php
require_once ("conexion.php");

error_reporting(0);
$buscar = $_POST['buscar'];
$busqueda = "SELECT * FROM contabilidad WHERE idcuentas LIKE '%". $buscar. "%' OR cuentas LIKE '%" . $buscar ."%' OR valor LIKE '%" . $buscar ."%';";

if (empty($buscar) || $buscar=""){
	$sql = "SELECT * FROM contabilidad ORDER BY idcuentas ASC";
}else{
	$sql = $busqueda;
}

$res=$mysql->query($sql);
$totCuentas = mysqli_num_rows($res);


if ($totCuentas>0) {


		echo "<center>";
		echo '<table  class="tabla">';
		echo '<tr class="header-table">';
			echo "<td><strong>ID</strong></td>";
			echo "<td><strong>Cuenta:</strong></td>";
			echo "<td><strong>Valor</strong></td>";
			echo "<td><strong>Fecha</strong></td>";
			echo '<td colspan="2"><strong></strong></td>';
			echo "</tr>";

			$i = 0;		
		while ($rowCunt = mysqli_fetch_array($res)) {
			$modulo = $i %  2;

			if ($modulo == 0){
				echo '<tr class="verde">';
			}else{
				echo '<tr class="gris">';
			}

			$id = $rowCunt['idcuentas'];
			echo "<td><form id=".'"FRM'.$rowCunt['idcuentas'].'"'.">";
			echo "<strong><input name='id' type='text' class='border-hidden-id' value=".'"'.$rowCunt['idcuentas'].'"'." readonly=". '" "'."/></strong>";
			echo "</form></td>";
			echo "<td>".$rowCunt['cuentas']."</td>";
			echo "<td>".$rowCunt['valor']."</td>";
			echo "<td>".$rowCunt['fecha']."</td>";
			$id1='"'. $id .'"';
			$CS1="'";
			echo '<td><a class="modificar" id="modificar'.$id.'"'. 'href='.$CS1.'javascript:modificar('. $id1 .')'.$CS1.'>Modificar</a></td>';
			echo '<td><a class="eliminar" href='.$CS1.'javascript:eliminar('. $id1 .')'.$CS1.'>Eliminar</a></td>';
			echo "</tr>";
			$i=$i +1;
		}
		echo "</table>";
		echo "</center>";
		echo"<br><br><br>";

		
} else {
	echo '<h1 class="NR">No se encontraron registros </h1>';
}

?>