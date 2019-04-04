<?php
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";


$codigo_datos = $_SESSION['iddatos'];
//echo $_SESSION['iddatos'];
		$sql = "select * from vista_usuario where codigo_datos= ".  $_SESSION['iddatos'];
		$resultado = ejecutar_query($sql,$conexion);
		$row = mssql_fetch_array($resultado);
		$codigo_persona = $row['codigo_persona'];
		$codigo_correo = $row['codigo_correo'];
		$codigo_direccion = $row['codigo_direccion'];
		$codigo_telefono = $row['codigo_telefono'];
		//echo $codigo_telefono;


if (!empty($_POST))
	{
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$fecha_nacimiento = $_POST['fecha_nacimiento'];
		$tipo_sangre = $_POST['tipo_sangre'];
		$telefono = $_POST['telefono'];
		$correo = $_POST['correo'];
		$pais = $_POST['pais'];
		$direccion = $_POST['direccion'];
		$sexo = $_POST['sexo'];
		$estado_civil = $_POST['estado_civil'];
		$lugar_nacimiento = $_POST['lugar_nacimiento'];
		$estado = $_POST['estado'];
		$codigo_pss = $_POST['codigo_pss'];



		$sql="exec spdatos '$codigo_datos','$pais','$nombre','$cedula','$fecha_nacimiento','','$estado'

		exec sppersona '$codigo_persona','$codigo_datos','$sexo','$tipo_sangre','$estado_civil','$lugar_nacimiento','','1'

		exec spdireccion '$codigo_direccion','$codigo_datos','','','$direccion','','1'

		exec spcorreo '$codigo_correo','$codigo_datos','','$correo','','1'

		exec sptelefono '$codigo_telefono','$codigo_datos','','$telefono','','1'

		update usuario set codigo_pss=$codigo_pss where codigo_datos=$codigo_datos ";

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
		<div class="actualizar_datos">
			
			<div align="center"><h1> Actualizar Datos Usuario </h1></div>
			<hr>
			<div class="alert"></div>

				<form action="" method="post">
					<label for="nombre">Nombre completo</label>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre completo" value="<?php echo $row['nombre']?>">

					<label for="cedula"> Cedula </label>
					<input type="text" name="cedula" id="cedula" placeholder="Cedula" value="<?php echo $row['DNI']?>">

					<label for="codigo_pss"> Codigo PSS</label>
				<input type="text" name="codigo_pss" id="codigo_pss" placeholder="Codigo PSS" value="<?php echo $row['codigo_pss']?>">

					<label for="telefono"> Telefono </label>
			    	<input type="text" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $row['telefono']?>">

					<label for="fecha_nacimiento"> Fecha de Nacimiento </label>
					<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']?>">

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

				<label for="pais"> Pais </label>
				<select name="pais" id="pais">
					<option value=" <?php echo $row['codigo_pais']; ?> "> <?php echo $row['pais']; ?> </option>

			    	<?php $query="select * from pais";
						$query=ejecutar_query($query,$conexion);
					
					while($lista=mssql_fetch_array($query)){?> 
        			<option value=" <?php echo $lista[0]; ?> "> <?php echo $lista[1]; ?> </option> <?php } ?>
      			</select>

      			<label for="correo"> Correo electronico </label>
			    <input type="text" name="correo" id="correo" placeholder="Correo electronico" value="<?php echo $row['correo'] ?>">

				<label for="direccion"> Direccion </label>
			    <input type="text" name="direccion" id="direccion" placeholder="Direccion actual" value="<?php echo $row['direccion']?>">

				<label for="sexo"> Sexo </label>
			    <select name="sexo" id="sexo">
			    	<option value=" <?php echo $row['sexo']; ?> "> <?php echo $row['sexo']; ?> </option>
			    	<option value="Masculino"> Masculino </option>
			    	<option value="Femenino"> Femenino</option>
			    	<option value="Otros"> Otros </option>

			    </select>

			    <label for="estado_civil" > Estado Civil </label>
			    <select name="estado_civil" id="estado_civil">
			    	<option value=" <?php echo $row['estado_civil']; ?> "> <?php echo $row['estado_civil']; ?> </option>
			    	<option value="Soltero"> Soltero </option>
			    	<option value="Casado"> Casado</option>
			    	<option value="Otro"> Otro </option>

			    </select>

			    <label for="lugar_nacimiento"> Lugar Nacimiento </label>
			    <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" placeholder="Lugar de Naciemiento" value="<?php echo $row['lugar_nacimiento']?>">
			    
			    <label for="estado"> Estado </label>
			    <input type="checkbox" name="estado" id="estado">

                <input type="submit" value="Guardar" class="btn_sav">

				</form>
			
		</div>

	</section>


<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>