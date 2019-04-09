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
			<th>Codigo cliente</th>
			<th>Motivo consulta</th>
			<th>Enfermedades</th>
			<th>Antecedentes</th>
			<th>Estado general</th>
			<th>Edicion</th>

		</tr> 

		<?php 
		$sql = "select * from historial_clinico";
		$sql = ejecutar_query($sql,$conexion);
		

		while($row = mssql_fetch_array($sql)) { ?>

<tr>
			<td><?php echo $row['codigo_usuario'];?></td>
			<td><?php echo $row['codigo_cliente'];?></td>
			<td><?php echo $row['motivo_consulta'];?></td>
			<td><?php echo $row['historial_enfermedades'];?></td>
			<td><?php echo $row['antecedentes'];?></td>
			<td><?php echo $row['estado_general'];?></td>
			<!--<td><?php echo $row['ta'];?></td>
			<td><?php echo $row['fc'];?></td>
			<td><?php echo $row['fr'];?></td>
			<td><?php echo $row['sat02'];?></td>-->
			<td>
				<b><a class="editar" href="actualizar_datos.php?codigo_datos=<?php echo $row['codigo_datos']?>">Editar</a></b>
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