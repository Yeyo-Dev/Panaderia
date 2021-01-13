<?php
  include 'conexion.php';
  //echo "SELECT * FROM registro WHERE folio='".$_GET['folio']."' ";
  //echo 'folio ' . $_GET['folio'] ;
//  $consulta=consultarUsuario($_GET['folio']);

    $sentencia="SELECT * FROM registro WHERE folio='".$_GET['folio']."' ";
    $resultado=mysqli_query($mysqli,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);

    $consulta= [
      $filas['nombre'],
      $filas['appaterno'],
      $filas['apmaterno'],
      $filas['fecnac'],
      $filas['telefono'],
      $filas['calle'],
      $filas['colonia'],
      $filas['ciudad'],
      $filas['estado'],
      $filas['cp'],
      $filas['numext'],
      $filas['numint'],
      $filas['usertype']
    ];

  /*function consultarUsuario($folio)
  {
   
   

  }*/


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Usuario</title>
<link rel = "stylesheet" href = "main.css">
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Usuario</h1> </span>
  		<br>
	  <form action="update2.php" method="POST">
      <input type="hidden" name="folio" value="<?php echo $_GET['folio']?> ">
  		<label>Nombre: </label>
  		<input type="text" id="nombre" name="nombre"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Apellido Paterno: </label>
  		<input type="text" id="appaterno" name="appaterno" value="<?php echo $consulta[1] ?>"><br>
  		
  		<label>Apellido Materno: </label>
      <input type = "text" id ="apmaterno" name="apmaterno" value = "<?php echo $consulta[2] ?>" ><br>
      
      <label>Fecha de Nacimiento: </label>
      <input type = "text" id ="fecnac" name="fecnac" value = "<?php echo $consulta[3] ?>" ><br>
     
      <label>Teléfono: </label>
      <input type = "text" id ="telefono" name="telefono" value = "<?php echo $consulta[4] ?>" ><br>

      <label>Calle: </label>
      <input type = "text" id ="calle" name="calle" value = "<?php echo $consulta[5] ?>" ><br>

      <label>Colonia: </label>
      <input type = "text" id ="colonia" name="colonia" value = "<?php echo $consulta[6] ?>" ><br>

      <label>Ciudad: </label>
      <input type = "text" id ="ciudad" name="ciudad" value = "<?php echo $consulta[7] ?>" ><br>

      <label>Estado: </label>
      <input type = "text" id ="estado" name="estado" value = "<?php echo $consulta[8] ?>" ><br>

      <label>Código Postal: </label>
      <input type = "text" id ="cp" name="cp" value = "<?php echo $consulta[9] ?>" ><br>

      <label>Número Exterior: </label>
      <input type = "text" id ="numext" name="numext" value = "<?php echo $consulta[10] ?>" ><br>

      <label>Número Interior: </label>
      <input type = "text" id ="numint" name="numint" value = "<?php echo $consulta[11] ?>" ><br>

      <label>Tipo de Usuario: </label>
      <select name="usertype" id = "usertype" value = "<?php echo $consulta[12] ?>" ><br>
      <option value = "Administrador">Administrador</option>
      <option value = "Empleado">Empleado</option>
  		</select>
  		<br>
  		<button type="submit" class="button primary">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	
</div>


</body>
</html>