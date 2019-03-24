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
					<label for="cedula"> Cedula </label>
					<input type="text" name="cedula" id="cedula" placeholder="Cedula">
					<label for="fecnacimiento"> Fecha de Nacimiento </label>
					<input type="date" name="fecnacimiento" id="fecnacimiento" placeholder="feccha nacimiento">
					<label for="tipsangre"> Tipo de Sangre </label>
					<select name="tipsangre" id="tipsangre">
			    	<option value="1"> A+ </option>
			    	<option value="2"> B+</option>
			    	<option value="3"> O+ </option>
			    	<option value="4"> AB+ </option>
			    	<option value="5"> A- </option>
			    	<option value="6"> B- </option>
			    	<option value="7"> O- </option>
			    	<option value="8"> AB- </option>


			    </select>



					<label for="pais"> Pais </label>
					<input type="text" name="pais" id="pais" placeholder="Pais">
					<label for="sexo"> Sexo </label>
			    <select name="sexo" id="sexo">
			    	<option value="1"> Masculino </option>
			    	<option value="2"> Femenino</option>
			    	<option value="3"> Otros </option>

			    </select>

			    <label for="estcivil" > Estado Civil </label>
			    <select name="estcivil" id="estcivil">
			    	<option value="1"> Soltero </option>
			    	<option value="2"> Casado</option>
			    	<option value="3"> Con un maricon </option>

			    </select>

			    <label for="lugnacimiento"> Lugar Naciemiento </label>
			    <input type="text" name="lugnacimiento" id="lugnacimiento" placeholder="Lugar de Naciemiento">
			    <label for="estado"> Estado </label>
			    <input type="checkbox" name="estado" id="estado">



				</form>
			
		</div>

	</section>


<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>