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
		<div class="Registro_clientes">
			
			<h1>Registro Clientes </h1>
			<hr>
			<div class="alert"></div>

			<form>
				<label for="nombre"> Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo">

				<label for="cedula"> Cedula o RNC  </label>
				<input type="text" name="cedula" id="nombre" placeholder="Cedula o RNC">

				<label for="numero_afiliado"> Numero Afiliado</label>
				<input type="text" name="numero_afiliado" id="numero_afiliado" placeholder="Numero Afiliado">

				<label for="correo"> Correo Electronico </label>
				<input type="email" name="correo" id="correo" placeholder="Correo Electronico">

				<label for="direccion"> Direccion </label>
				<input type="text" name="direccion" id="direccion" placeholder="Direccion">



				<label for="seguro"> ARS </label>
				<select name="seguro">
					<option value="1"> ARS Humano </option>
					<option value="2"> ARS Palic </option>
					<option value="3"> ARS Universal </option>
					<option value="4"> ARS Meta Salud</option>
					<option value="5"> ARS Mafre </option>
					
				</select>
				
				<label for="sexo"> Sexo </label>
			    <select name="sexo" id="sexo">
			    	<option value="1"> Masculino </option>
			    	<option value="2"> Femenino</option>
			    	<option value="3"> Otros </option>

			    </select>

			    <label for="tipo_sangre"> Tipo de Sangre </label>
					<select name="tipo_sangre" id="tipo_sangre">
						<option value=" <?php echo $row['tipo_sangre']; ?> "> <?php echo $row['tipo_sangre']; ?> </option>
			    	<option value="A+"> A+ </option>
			    	<option value="B+"> B+</option>
			    	<option value="O+"> O+ </option>
			    	<option value="AB+"> AB+ </option>
			    	<option value="A"> A- </option>
			    	<option value="B"> B- </option>
			    	<option value="O-"> O- </option>
			    	<option value="AB-"> AB- </option>
			    </select>

			    <label for="estado_civil" > Estado Civil </label>
			    <select name="estado_civil" id="estado_civil">
			    	<option value=" <?php echo $row['estado_civil']; ?> "> <?php echo $row['estado_civil']; ?> </option>
			    	<option value="Soltero"> Soltero </option>
			    	<option value="Casado"> Casado</option>
			    	<option value="Otro"> Otro </option>

			    </select>

			    <label for="estado"> Estado </label>
			    <input type="checkbox" name="estado" id="estado">

				<input type="submit" value="Crear Cliente" class="btn_save">






			</form>
		</div>

	</section>


<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>



