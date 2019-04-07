<?php 
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";


?>

<!DOCTYPE html>
<html>
<head>
	<title> Proyecto Web </title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1,minimum-scale=1"> 
	
	<?php include "paginas/scripts.php"; ?>


</head>
<body>
<?php include "paginas/header.php"; ?>

<section id="container">
	<div></br><h2>Lista de clientes</h2></div>

	<table>
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Numero afiliado</th>
			<th>Telefono</th>
			<th>Seguro</th>
			<th>Edicion</th>

		</tr>

		<?php 
		$sql = "select * from vista_cliente";
		$sql = ejecutar_query($sql,$conexion);
		

		while($row = mssql_fetch_array($sql)) { ?>

<tr>
			<td><?php echo $row['codigo_cliente'];?></td>
			<td><?php echo $row['nombre'];?></td>
			<td><?php echo $row['numero_afiliado'];?></td>
			<td><?php echo $row['telefono'];?></td>
			<td><?php echo $row['descripcion'];?></td>
			<td>
				<b><a class="editar" href="actualizar_cliente.php?codigo_datos=<?php echo $row['codigo_datos']?>">Editar</a></b>
			</td>

		</tr> 

	<?php }

		?>

		

	</table>

</section>


<?php include "paginas/footer.php"; ?> 

	<script src ="js/menu.js"></script>

</body>
</html>