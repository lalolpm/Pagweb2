<?php
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";


$codigo_datos = $_SESSION['iddatos'];
echo 'echi'.$_SESSION['iddatos'];
		$sql = "select * from datos where codigo_datos = ".  $_SESSION['iddatos'];
		$resultado = ejecutar_query($sql,$conexion);
		$row = mssql_fetch_array($resultado);


if (!empty($_POST))
	{
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$fecha_nacimiento = $_POST['fecha_nacimiento'];
		$tipo_sangre = $_POST['tipo_sangre'];
		$pais = $_POST['pais'];
		$direccion = $_POST['direccion'];
		$sexo = $_POST['sexo'];
		$estado_civil = $_POST['estado_civil'];
		$lugar_nacimiento = $_POST['lugar_nacimiento'];
		$estado = $_POST['estado'];

		$sql="exec spdatos '$codigo_datos','$pais','$nombre','$cedula','$fecha_nacimiento','','','$estado'";

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
					<input type="text" name="cedula" id="cedula" placeholder="Cedula">

					<label for="fecnacimiento"> Fecha de Nacimiento </label>
					<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="fecha nacimiento" value="<?php echo $row[4]?>">

					<label for="tipo_sangre"> Tipo de Sangre </label>
					<select name="tipo_sangre" id="tipo_sangre">
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
				<select name="pais" id="pais">
			    	<?php $sql="select * from pais";
						$resultado=ejecutar_query($sql,$conexion);
					
					while($lista=mssql_fetch_array($resultado)){?> 
        			<option value=" <?php echo $lista[0]; ?> "> <?php echo $lista[1]; ?> </option> <?php } ?>
      			</select>

				<label for="direccion"> Direccion </label>
			    <input type="text" name="direccion" id="direccion" placeholder="Direccion actual">

				<label for="sexo"> Sexo </label>
			    <select name="sexo" id="sexo">
			    	<option value="1"> Masculino </option>
			    	<option value="2"> Femenino</option>
			    	<option value="3"> Otros </option>

			    </select>

			    <label for="estado_civil" > Estado Civil </label>
			    <select name="estado_civil" id="estado_civil">
			    	<option value="1"> Soltero </option>
			    	<option value="2"> Casado</option>
			    	<option value="3"> Con un maricon </option>

			    </select>

			    <label for="lugar_nacimiento"> Lugar Nacimiento </label>
			    <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" placeholder="Lugar de Naciemiento" >
			    
			    <label for="estado"> Estado </label>
			    <input type="checkbox" name="estado" id="estado">

                <input type="submit" value="Actualizar Datos" class="btn_sav">

				</form>
			
		</div>

	</section>


<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>