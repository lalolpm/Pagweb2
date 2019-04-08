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
	<div></br><h2>Lista de usuarios</h2></div>

	<table>
		<tr>
			<th>Codigo</th>
			<th>Producto</th>
			<th>Precio venta</th>
			<th>Cantidad existente</th>
			<!--<th>Suplidor</th>-->
			<th>Fecha vencimiento</th>
			<th>Lote</th>
			<th>Edicion</th>

		</tr> 

		<?php 
		$sql = "select * from productos";
		$sql = ejecutar_query($sql,$conexion);

		
		

		while($row = mssql_fetch_array($sql)) { ?>

<tr>
			<td><?php echo $row['codigo_producto'];?></td>
			<td><?php echo $row['producto'];?></td>
			<td><?php echo $row['precio_venta'];?></td>
			<td><?php echo $row['cantidad_existente'];?></td>

			<td><?php echo $row['fecha_vencimiento'];?></td>
			<td><?php echo $row['lote'];?></td>
			<td>
				<b><a class="editar" href="actualizar_articulos.php?codigo_producto=<?php echo $row['codigo_producto']?>">Editar</a></b>
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