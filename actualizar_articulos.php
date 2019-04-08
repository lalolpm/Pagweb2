<?php
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";

$codigo_producto = $_GET['codigo_producto'];

$sql = ejecutar_query("select * from productos",$conexion);

$row = mssql_fetch_array($sql);

if(!empty($_POST))
{
	$producto = $_POST['producto'];
	$suplidor = $_POST['suplidor'];
	$precio_venta = $_POST['precio_venta'];
	$precio_compra = $_POST['precio_compra'];
	$cantidad = $_POST['cantidad'];
	$fecha_vencimiento = $_POST['fecha_vencimiento'];
	$lote = $_POST['lote'];

	$sql = "exec spproductos '$codigo_producto','$suplidor','$producto','$precio_venta','$cantidad','','$precio_compra','$fecha_vencimiento','$lote','','1'
	";

	$resultado = ejecutar_query($sql,$conexion);
	

	if ($resultado) {
		$alert = '<p class="msg_save">Producto actualizado</p>';
	}

}

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
<?php include "paginas/header.php";  ?>
<section id="container">
		<div class="Registro_articulos">
			
			<h1>Registro Articulos </h1>
			<hr>
			<div class="alert"><?php echo $alert;?></div>

			<form action="" method="post">
				<label for="producto"> Nombre producto </label>
				<input type="text" name="producto" id="producto" placeholder="Nombre producto" value="<?php echo $row['producto']?>">

				<label for="suplidor"> Suplidor </label>
				<select name="suplidor" id="suplidor">
			    	<?php $query="select * from vista_suplidores";
						$query=ejecutar_query($query,$conexion);
					
					while($lista=mssql_fetch_array($query)){?> 
        			<option value=" <?php echo $lista[0]; ?> "> <?php echo $lista[1]; ?> </option> <?php } ?>
      			</select>

				<label for="precio_venta"> Precio de venta </label>
				<input type="text" name="precio_venta" id="precio_venta" placeholder="Precio venta" value="<?php echo $row['precio_venta']?>">

				<label for="cantidad"> Cantidad </label>
				<input type="text" name="cantidad" id="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad_existente']?>">

				<label for="precio_compra"> Precio de compra </label>
				<input type="text" name="precio_compra" id="precio_compra" placeholder="Precio de compra" value="<?php echo $row['precio_compra']?>">

				<!--<label for="unidad"> Unidad de venta </label>
				<input type="combobox" name="unidad" id="unidad">
				<select>
					<option value="1">Uno</option>
					<option value="2">Paquete 6</option>
					<option value="3">Paquete 12</option>

				</select> -->

				<label for="fecha_vencimiento"> Fecha vencimiento </label>
				<input type="date" name="fecha_vencimiento" id="fecha_vencimiento" placeholder="Fecha vencimiento" value="<?php echo $row['fecha_vencimiento']?>">

				<label for="lote"> Lote </label>
				<input type="text" name="lote" id="lote" placeholder="Lote" value="<?php echo $row['lote']?>">	

				<label for="estado"> Estado </label>
				<input type="checkbox" name="estado" id="estado">

				<input type="submit" value="Crear Articulos" class="btn_save">

			</form>
		</div>

	</section>


<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>

