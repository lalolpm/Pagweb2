

<!DOCTYPE html>
<html>
<head>
	<?php include "paginas/scripts.php"; ?>
	<title>Historial Clinico</title>
</head>
<body>
<?php include "paginas/header.php";  ?>

<section id="container">
	<div class="title_page">
		<h1><i class="fas fa-cube"></i> Historial Clinico</h1>
	</div>
	<div class="datos_cliente">
		<div class="action_cliente">
			<h4> Datos Clientes </h4>
			
		</div>

		<form name="form_cliente" id="form_cliente" class="datos">
			<div class="wd30">
				<label>Codigo</label>
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
			 <div class="wd40">
			 	<label>Cedula</label>
			 	<input type="text" name="ced_cli" id="ced_cli" disabled required >
			 </div>
			 <div class="wd40">
			 	<label> Telefono </label>
			 	<input type="text" name="tel_cli" id="tel_cli" disabled required>
			 </div>
			 <div class="wd40">
			 	<label> ARS </label>
			 	<input type="text" name="ars_cli" id="ars_cli" disabled required> 	
			 </div>
			 <div class="wd100">
			 	<label> Direccion </label>
			 	<input type="text" name="dir_cliente" id="dir_cliente" disabled required >
			 </div>
		</form>		
	</div>





</section>


<?php include "paginas/footer.php"; ?>


<script src ="js/menu.js"></script>
</body>
</html>




