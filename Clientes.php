<?php
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";

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

		$sql = "exec spdatos '','1','$nombre','$cedula','$fecha_nacimiento','','1'

			declare @codigo_datos int 
			set @codigo_datos= (select max(codigo_datos) from datos)

			exec spcliente '',@codigo_datos,'1','$numero_afiliado','$seguro'

			exec sppersona '',@codigo_datos,'$sexo','$tipo_sangre','$estado_civil','','','1'

			exec spcorreo '',@codigo_datos,'','$correo','','1'

			exec spdireccion '',@codigo_datos,'','','$direccion','','1'

			exec sptelefono '',@codigo_datos,'','$telefono','','1'";

			$resultado = ejecutar_query($sql,$conexion);

			if($resultado){
				$alert = '<p class="msg_save">Cliente creado</p>';
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
		<div class="Registro_clientes">
			
			<h1>Registro Clientes </h1>
			<hr>
			<div class="alert"><?php echo $alert; ?></div>

			<form action="" method="post">
				<label for="nombre"> Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo">

				<label for="cedula"> Cedula o RNC  </label>
				<input type="text" name="cedula" id="nombre" placeholder="Cedula o RNC">

				<label for="numero_afiliado"> Numero Afiliado</label>
				<input type="text" name="numero_afiliado" id="numero_afiliado" placeholder="Numero Afiliado">

				<label for="fecha_nacimiento"> Fecha de Nacimiento </label>
				<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']?>">

				<label for="telefono"> Telefono </label>
			    <input type="text" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $row['telefono']?>">

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
			    	<option value="Masculino"> Masculino </option>
			    	<option value="Femenino"> Femenino</option>
			    	<option value="Otros"> Otros </option>

			    </select>

			    <label for="tipo_sangre"> Tipo de Sangre </label>
					<select name="tipo_sangre" id="tipo_sangre">
						
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



