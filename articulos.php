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
			<div class="alert"></div>

			<form>
				<label for="Codigo"> Codigo </label>
				<input type="text" name="cod_pro" id="cod_pro" placeholder="Codigo Producto">

				<label for="Descripcion"> Descripcion  </label>
				<input type="text" name="des_pro" id="des_pro" placeholder="Descripcion Producto">

				<label for="Precio_Producto"> Precio Producto </label>
				<input type="text" name="Precio_venta" id="Precio_venta" placeholder="Precio Producto">
				<label for="fecven"> Fecha vencimiento </label>
				<input type="date" name="fecven" id="fecven" placeholder="Fecha vencimiento">
				<label for="lote"> Lote </label>
				<input type="text" name="Lote" id="Lote" placeholder="Lote">				
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



