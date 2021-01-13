<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel = "stylesheet" href = "main.css">
</head>
<body>
<form action="altas.php" method="POST"> <br/>
    Folio: <input type = "text" maxlength="4" name="txtFolio"> <br/>
    Nombre: <input type = "text" maxlength= "25" name=txtNombre> <br/>
    Apellido Paterno: <input type = "text" maxlenght = "25" name = "txtApPa"> <br/>
    Apellido Materno: <input type="text" maxlength = "25" name = "txtApMa"> <br/>
    Fecha de Nacimiento: <input type = "Date" name= "fecNac"> <br/>
    Calle: <input type = "text" maxlength="40" name="txtCalle"> <br/>
    Colonia: <input type = "text" maxlength="30" name="txtColonia"> <br/>
    Código Postal: <input type = "text" maxlength="5" name="txtCp"> <br/>
    Ciudad: <input type = "text" maxlength="30" name="txtCiudad"> <br/>
    Estado: <input type = "text" maxlength="30" name="txtEstado"> <br/>
    Número Exterior: <input type = "text" maxlength="10" name="txtNumExt"> <br/>
    Número Interior: <input type = "text" maxlength="10" name="txtNumInt"> <br/>
    Teléfono: <input type = "text" maxlength="10" name="txtTel"> <br/>
    Tipo de Usuario:
    <select name = "cmbUsertype">
        <option value = "Administrador">Administrador</option>
        <option value = "Empleado">Empleado</option>
    </select>

    <input type = "submit" class = "button primary" value = "Registrar" name= "btnRegistrar">
    <input type = "button"  value = "Regresar" name ="btnReturn" onclick="window.history.back();">
</form> 
</body>
</html>