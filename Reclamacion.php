<!DOCTYPE html>
<html>
<head>
	<title> Proyecto Web </title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1,minimum-scale=1"> 
	
	<?php include "paginas/scripts.php"; ?>
    <link rel="stylesheet"  href="css/estilosW.css">
</head>
<body>
<?php include "paginas/header.php";  ?>
<section id="container">
	<div class="seguros">
		<h1> Seguros</h1>
	</div>

	<div class="datos_seguros">
		<div class="action_seguros">
			<h4> Datos Seguros </h4>
		</div>

		<thead>
			  		<tr>
			  			<th width="100px"> Codigo </th>
			  			<th> Descripcion</th>
			  			<th> Existencia </th>
			  			<th width="100px"> Cantidad </th>
			  			<th class="textright"> Precio </th>
			  			<th class="textright"> Precio Total </th>
			  			<th> Acción</th>
			  		</tr>

			  		<tr>
			  			<td><input type="text" name="txt_cod_producto" id="txt_cod_producto"> </td>
			  			<td id="txt_descripcion">-</td>
			  			<td id="txt_existencia">-</td>
			  			<td><input type="text" name="txt_cant_producto" id="txt_cant_producto" value="0" min="1" disabled></td>
			  			<td id="txt_precio" class="textright">0.00</td>
			  			<td id="txt_precio_total" class="textright">0.00</td>
			  			<td> <a href="#" id="add_product_venta" class="link_add"><i class="fas fa-plus"></i> Agregar</a></td>
			  		</tr>
			  		<tr>
			  			<th>Codigo</th>
			  			<th colspan="2">Descripción</th>
			  			<th>Cantidad</th>
			  			<th class="textright">Precio</th>
			  			<th class="textright"> Precio Total</th>
			  			<th>Acción</th>
			  		</tr>
			  	</thead>
	</div>


</section>



<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>

