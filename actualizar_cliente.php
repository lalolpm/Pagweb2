<?php
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";


		$sql = "select * from vista_cliente where codigo_datos= '23'"  ;
		$resultado = ejecutar_query($sql,$conexion);
		$row = mssql_fetch_array($resultado);
		$codigo_datos = $row['codigo_datos'];
		$codigo_cliente = $row['codigo_cliente'];
		$codigo_persona = $row['codigo_persona'];
		$codigo_correo = $row['codigo_correo'];
		$codigo_direccion = $row['codigo_direccion'];
		$codigo_telefono = $row['codigo_telefono'];
		echo $row['codigo_seguro'];
		echo $row['descripcion'];

if (!empty($_POST))
	{
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$numero_afiliado = $_POST['numero_afiliado'];
		$fecha_nacimiento = $_POST['fecha_nacimiento'];
		$tipo_sangre = $_POST['tipo_sangre'];
		$telefono = $_POST['telefono'];
		$seguro = $_POST['seguro'];
		$correo = $_POST['correo'];
		$direccion = $_POST['direccion'];
		$sexo = $_POST['sexo'];
		$estado_civil = $_POST['estado_civil'];
		$estado = $_POST['estado'];

		$sql = "exec spdatos '$codigo_datos','1','$nombre','$cedula','$fecha_nacimiento','','1'

			exec spcliente '$codigo_cliente','$codigo_datos','1','$numero_afiliado','$seguro'

			exec sppersona '$codigo_persona','$codigo_datos','$sexo','$tipo_sangre','$estado_civil','','','1'

			exec spcorreo '$codigo_correo','$codigo_datos','','$correo','','1'

			exec spdireccion '$codigo_direccion','$codigo_datos','','','$direccion','','1'

			exec sptelefono '$codigo_telefono','$codigo_datos','','$telefono','','1'";

			ejecutar_query($sql,$conexion);



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
		<div class="actualizar_cliente">
			
			<div align="center"><h1> Actualizar Datos Clientes </h1></div>
			<hr>
			<div class="alert"></div>

				<form action="" method="post">
					<label for="nombre"> Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" value="<?php echo $row['nombre']?>">

				<label for="cedula"> Cedula o RNC  </label>
				<input type="text" name="cedula" id="nombre" placeholder="Cedula o RNC" value="<?php echo $row['DNI']?>">

				<label for="numero_afiliado"> Numero Afiliado</label>
				<input type="text" name="numero_afiliado" id="numero_afiliado" placeholder="Numero Afiliado" value="<?php echo $row['numero_afiliado']?>">

				<label for="fecha_nacimiento"> Fecha de Nacimiento </label>
				<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']?>">

				<label for="telefono"> Telefono </label>
			    <input type="text" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $row['telefono']?>">

				<label for="correo"> Correo Electronico </label>
				<input type="email" name="correo" id="correo" placeholder="Correo Electronico" value="<?php echo $row['correo']?>">

				<label for="direccion"> Direccion </label>
				<input type="text" name="direccion" id="direccion" placeholder="Direccion" value="<?php echo $row['direccion']?>">



				<label for="seguro"> ARS </label>
				<select name="seguro">
					<option value=" <?php echo $row['codigo_seguro']; ?> "> <?php echo $row['descripcion']; ?> </option>
					<option value="1"> ARS Humano </option>
					<option value="2"> ARS Palic </option>
					<option value="3"> ARS Universal </option>
					<option value="4"> ARS Meta Salud</option>
					<option value="5"> ARS Mafre </option>
					
				</select>
				
				<label for="sexo"> Sexo </label>
			    <select name="sexo" id="sexo">
			    	<option value=" <?php echo $row['sexo']; ?> "> <?php echo $row['sexo']; ?> </option>
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

				<input type="submit" value="Guardar" class="btn_save">
				</form>
			
		</div>

	</section>


<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>