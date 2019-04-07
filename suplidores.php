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
				<div class="Registro_suplidores">
					
					<h1>Registro Suplidores </h1>
					<hr>
					<div class="alert"></div>

					<form>
						<label for="nombre"> Nombre </label>
						<input type="text" name="nombre" id="nombre" placeholder="Nombre">
						<label for="rnc"> Rnc</label>
						<input type="text" name="rnc" id="rnc" placeholder="RNC">
						<label for="razon_social"> Razon Social </label>
						<input type="text" name="rsocial" id="rsocial" placeholder="Razon Social">
						<label for="direccion"> Direccion </label>
						<textarea name="direccion" id="direccion" ></textarea>
						<label for="telefono"> Telefono </label>
						<input type="text" name="telefono" id="telefono" placeholder="Telefono">
						<label for="email"> Email </label>
						<input type="email" name="email" id="email" placeholder="Email">
						<label for="status"> Estado </label>
						<input type="checkbox" name="estado" id="estado">

						<input type="submit" value="Crear Suplidores" class="btn_sa">


					</form>

				</div>	


		</section>		
		<?php include "paginas/footer.php"; ?>

		<script src ="js/menu.js"></script>
	</body>
</html>