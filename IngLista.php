<?php
	require ('conexion.php');
	$buscar	
?>

<html>
	<head>
		<title>Ingredientes</title>

<style type="text/css">


	/* Datagrid */
		body {
	font: normal medium/1.4 sans-serif;
	background: linear-gradient( 0deg, #C0C0C0   , #F8F8F8);}
	table {
	border-collapse: collapse;
	width: 100%;
	}
	th, td {
	padding: 0.25rem;
	border: 1px solid #ccc;
	}
	tbody tr:nth-child(odd) {
	background: #eee;
	}

	#titulotabla{
		width: 100%;
		background: blue;
		color:white;

	}

	#titulo{

		width: 100%;
		background: #2ECC71;
		color:white;

	}

	.modificar{
		text-decoration: none;
		color:darkgoldenrod;
	}

	
	.modificar :hover{
	background-color: black;
	}

	
	.eliminar :hover{
		background-color: black;

	}

	.eliminar{
		text-decoration: none;
		color:red;
	}

	#new_registro{
		position: fixed;
		left: 90%;
		top: 82%;
		margin: 2%;
	}
	#new_registro img{
		width: 100%;
		padding: 0px;
	}
	#new_registro:hover{
		position: fixed;
		left: 90%;
		top: 80%;
		margin: 2%;
	}
	img:hover{
		padding: 25%;
	}
	.search{
		border-style:solid;
		border-radius: 3px;
		width: 35%;
		background-color: oldlace;
		color: darkblue;
		font-family: Georgia, 'Times New Roman', Times, serif;
		font-stretch: 3;
		font-size: 25px;
	}
	.search-b{
		font-stretch: 3;
		font-size: 25px;
		font-family: Georgia, 'Times New Roman', Times, serif;
		border-style: none;
		border-radius: 5px;
		background-color:#2ECC71;
		color: whitesmoke;
	}
</style>
	</head>
	<body>
		<div id="titulo">
		<center><h1>Registro de Ingredientes</h1></center>
		</div>
		<a id="new_registro" href="IngAltas.html"><img src="./imagenes/mas.png" title="Nuevo Registro"></a>
		<p></p><center>
		<form action="#" method="POST"id="b-form">
	<input class="search" type="search" name="buscar" id="buscar">	
	<input class="search-b" type="submit" value="Buscar">		
		</form></center>

		<table border=1 width="80%">
			<head>
				<tr id="titulotabla">
					<td><b>Codigo de Producto</b></td>
					<td><b>Nombre del Producto</b></td>
					<td><b>Cantidad del Producto</b></td>
					<td><b>Peso (Kg) c/u del Producto</b></td>
					<td><b>Presio ($) c/u del Producto</b></td>
					<td><b>Fecha de Caducidad del Producto</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>

					<?php
					error_reporting(0);
					$buscar = $_POST['buscar'];
					$busqueda = "SELECT CodigoIng, NombreIng, CantidadIng, PesoCUIng, PresioCUIng, FechaCadIng FROM ingredientes WHERE CodigoIng LIKE '%". $buscar. "%' OR NombreIng LIKE '%" . $buscar ."%' OR CantidadIng LIKE '%" . $buscar ."%' OR PesoCUIng LIKE '%" . $buscar ."%' OR PresioCUIng LIKE '%" . $buscar ."%';";
					
					if (empty($buscar) || $buscar=""){
						$query="SELECT CodigoIng, NombreIng, CantidadIng, PesoCUIng, PresioCUIng, FechaCadIng FROM ingredientes";
					}else{
						$query = $busqueda;
					}

					$resultado=$mysqli->query($query);
					?>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['CodigoIng'];?>
							</td>
							<td>
								<?php echo $row['NombreIng'];?>
							</td>
							<td>
								<?php echo $row['CantidadIng'];?>
							</td>
							<td>
								<?php echo $row['PesoCUIng'];?>
							</td>
							<td>
								<?php echo $row['PresioCUIng'];?>
							</td>
							<td>
								<?php echo $row['FechaCadIng'];?>
							</td>
							<td>
								<a class="modificar" href="PedirModificar.php?CodigoIng=<?php echo $row['CodigoIng'];?>">Modificar</a>
							</td>
							<td>
								<a class="eliminar" href="IngEliminar.php?CodigoIng=<?php echo $row['CodigoIng'];?>">Eliminar</a>
							</td>
						</tr>

					<?php }?>
					
				</tbody>
			</table>
			<br><br>
			<div>
						<input type="button" value="Menu Index" name="B2" onClick="javascript: window.location.href='Panaderia.html';">
						</div>
		</body>
	</html>	