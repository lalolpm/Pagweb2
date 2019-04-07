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
	<div class="facturacion">
			<h1><i class="imagen"></i>Facturación </h1>
	</div>

			<div class="datos_cliente">
				<div class="action_cliente">
					<h4> DATOS PACIENTES </h4>
				 </div>

				 <form name="form_cliente_factura" id="form_cliente_factura" class="datos1">
				 	 <div class="wd30"><label>Codigo</label>
							<input type="text" name="codigo" id="codigo" >
						 </div>
						 <div class="wd30"> 
						 	<label> Nombre </label>
						 	<input type="text" name="nom_cli" id="nom_cli" disabled required >
						 </div>	
						 <div class="wd30"> 
						 	<label> Sexo </label>
						 	<input type="text" name="sexo" id="sexo" disabled required>	
						 </div>
						 <div class="wd30">
						 	<label>Cedula</label>
						 	<input type="text" name="ced_cli" id="ced_cli" disabled required >
						 </div>
						 <div class="wd30">
						 	<label> Telefono </label>
						 	<input type="text" name="tel_cli" id="tel_cli" disabled required>
						 </div>
						 <div class="wd30">
						 	<label> ARS </label>
						 	<input type="text" name="ars_cli" id="ars_cli" disabled required> 	
						 </div>
						 <!--<div class="wd100">
						 	<label> Direccion </label>
						 	<textarea name="dir_cli" id="dir_cli" disabled required>  </textarea>
						 </div>-->

				 </form>

			 </div>

			 <div class="datos_venta">
			 	<div class="datos1">
			 		<div class="wd50"> 
			 			<label> Vendedor</label>
			 			<p> Puto chino </p>
			 		</div>
			 		<div class="wd50">
			 			<label> Acciones </label>
			 			<div id="acciones_ventas">
			 				<a href="#" class="btn_ok textcenter" id="btn_anular_venta"> Anular </a>
			 				<a href="#" class="btn_new textcenter" id="btn_facturacion_venta"> Procesar </a>
			 			</div>
				 	</div>
				 </div>	
			 </div>

			  <table class="tbl_venta">
			  	
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

			  	<tbody id="detalle_venta">
			  		<tr>
			  			<td>1</td>
			  			<td colspan="2"> UNA VAINa</td>
			  			<td class="textcenter">1</td>
			  			<td class="textright">100.00</td>
			  			<td class="textright">100.00</td>
			  			<td class="">
			  				<a href="link_delete" href="#" onclick="event.preventDefault(); 
			  				del_product_detalle(1);"><i class="far fa-trash-alt"></i></a>
			  			</td>
			  		</tr>  		
			  	</tbody>
			  </table>
</section>



<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>



