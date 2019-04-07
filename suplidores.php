<?php
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";

if (!empty($_POST))
	{
		$nombre = $_POST['nombre'];
		$rnc = $_POST['cedula'];
		$telefono = $_POST['telefono'];
		$razon_social = $_POST['razon_social'];
		$correo = $_POST['correo'];
		$direccion = $_POST['direccion'];
		$estado = $_POST['estado'];

		$sql = "exec spdatos '','1','$nombre','$cedula','2000/01/01','','1'

			declare @codigo_datos int 
			set @codigo_datos= (select max(codigo_datos) from datos)

			exec spsuplidores '',@codigo_datos,'$razon_social','','','1'

			exec spcorreo '',@codigo_datos,'','$correo','','1'

			exec spdireccion '',@codigo_datos,'','','$direccion','','1'

			exec sptelefono '',@codigo_datos,'','$telefono','','1'";

			$resultado = ejecutar_query($sql,$conexion);

			if($resultado){
				$alert = '<p class="msg_save">Suplidor creado</p>';
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
				<div class="Registro_suplidores">
					
					<h1>Registro Suplidores </h1>
					<hr> 
					<div class="alert"><?php echo $alert;?></div>

					<form action="" method="post">
						<label for="nombre"> Nombre </label>
						<input type="text" name="nombre" id="nombre" placeholder="Nombre">
						<label for="rnc"> RNC</label>
						<input type="text" name="rnc" id="rnc" placeholder="RNC">
						<label for="razon_social"> Razon Social </label>
						<input type="text" name="razon_social" id="rsocial" placeholder="Razon Social">
						<label for="direccion"> Direccion </label>
						<textarea name="direccion" id="direccion" ></textarea>
						<label for="telefono"> Telefono </label>
						<input type="text" name="telefono" id="telefono" placeholder="Telefono">
						<label for="correo"> Correo electronico </label>
						<input type="text" name="correo" id="correo" placeholder="Correo electronico">
						<label for="status"> Estado </label>
						<input type="checkbox" name="estado" id="estado">

						<input type="submit" value="Crear Suplidor" class="btn_sa">


					</form>

				</div>	


		</section>		
		<?php include "paginas/footer.php"; ?>

		<script src ="js/menu.js"></script>
	</body>
</html>