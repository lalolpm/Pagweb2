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
		<div class="actualizar_datos">
			
			<h1> Actualizar Datos </h1>
			<hr>
			<div class="alert"></div>
			
				<form action="" method="post">
					<label for="fecnacimiento"> Fecha de Nacimiento </label>
					<input type="date" name="fecnacimiento" id="fecnacimiento" placeholder="feccha nacimiento">
					<label for="pais"> Pais </label>
					<input type="text" name="pais" id="pais" placeholder="Pais">
					<label for="sexo"> Sexo </label>
			    <select name="sexo" id="sexo">
			    	<option value="1"> Masculino </option>
			    	<option value="2"> Femenino</option>
			    	<option value="3"> Otros </option>

			    </select>
			    <select name="estcivil" id="estcivil">
			    	<option value="1"> Soltero </option>
			    	<option value="2"> Casado</option>
			    	<option value="3"> Con un maricon </option>

			    </select>

			    <label for="lugnacimiento"> Lugar Naciemiento </label>
			    <input type="text" name="lugnacimiento" id="lugnacimiento" placeholder="lugnacimiento">



				</form>
			
		</div>

	</section>


<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>