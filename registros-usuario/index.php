<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index</title>
<link rel = "stylesheet" href = "main.css">
</head>
<body>
<div class="todo">
  
  
  <div id="contenido">
  	<table style = "margin: auto; width: 1500 px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>Folio</th>
  			<th>Nombre</th>
  			<th>Apellido Paterno</th>
  			<th>Apellido Materno</th>
        <th>Fecha de Nacimiento</th>
        <th>Teléfono</th>
        <th>Calle</th>
        <th>Colonia</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>Código Postal</th>
        <th>Número Exterior</th>
        <th>Número Interior</th>
        <th>Tipo de Usuario</th>
  			<th> <a href="formRegistro.php"> <button class="button primary">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM registro";
      $resultado=mysqli_query($mysqli,$sentencia);
      while($filas=mysqli_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['folio']; echo "</td>";
          echo "<td>"; echo $filas['nombre']; echo "</td>";
          echo "<td>"; echo $filas['appaterno']; echo "</td>";
          echo "<td>"; echo $filas['apmaterno']; echo "</td>";
          echo "<td>"; echo $filas['fecnac']; echo "</td>";
          echo "<td>"; echo $filas['telefono']; echo "</td>";
          echo "<td>"; echo $filas['calle']; echo "</td>";
          echo "<td>"; echo $filas['colonia']; echo "</td>";
          echo "<td>"; echo $filas['ciudad']; echo "</td>";
          echo "<td>"; echo $filas['estado']; echo "</td>";
          echo "<td>"; echo $filas['cp']; echo "</td>";
          echo "<td>"; echo $filas['numext']; echo "</td>";
          echo "<td>"; echo $filas['numint']; echo "</td>";
          echo "<td>"; echo $filas['usertype']; echo "</td>";

          echo "<td>  <a href='update.php?folio=".$filas['folio']."'> <button class = 'button'>Modificar</button> </a> </td>";
          echo "<td> <a href='delete.php?folio=".$filas['folio']."''><button class = 'button primary'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  



</body>
</html>