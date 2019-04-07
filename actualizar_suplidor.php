<?php
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";

$cod = $_GET['codigo_datos'];


		$sql = "select * from vista_suplidores where codigo_datos= '$cod'"  ;
		$resultado = ejecutar_query($sql,$conexion);
		$row = mssql_fetch_array($resultado);
		$codigo_datos = $row['codigo_datos'];
		$codigo_correo = $row['codigo_correo'];
		$codigo_suplidor = $row['codigo_suplidor'];
		$codigo_direccion = $row['codigo_direccion'];
		$codigo_telefono = $row['codigo_telefono'];
		//echo $row['codigo_seguro'];
		//echo $row['descripcion'];

if (!empty($_POST))
	{
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$telefono = $_POST['telefono'];
		$razon_social = $_POST['razon_social'];
		$correo = $_POST['correo'];
		$direccion = $_POST['direccion'];
		$estado = $_POST['estado'];

		$sql = "exec spdatos '$codigo_datos','1','$nombre','$cedula','$fecha_nacimiento','','1'

			exec spsuplidores '$codigo_suplidor','$codigo_datos','$razon_social','','','1'

			exec spcorreo '$codigo_correo','$codigo_datos','','$correo','','1'

			exec spdireccion '$codigo_direccion','$codigo_datos','','','$direccion','','1'

			exec sptelefono '$codigo_telefono','$codigo_datos','','$telefono','','1'";

			$resultado = ejecutar_query($sql,$conexion);

			if($resultado){
				$alert = '<p class="msg_save">Suplidor actualizado</p>';
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
		<div class="actualizar_cliente">
			
			<div align="center"><h1> Actualizar Datos Clientes </h1></div>
			<hr>
			<div class="alert"><?php echo $alert;?></div>

				<form action="" method="post">
					<label for="nombre"> Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" value="<?php echo $row['nombre']?>">

				<label for="cedula"> RNC  </label>
				<input type="text" name="cedula" id="cedula" placeholder="RNC" value="<?php echo $row['DNI']?>">

				<label for="razon_social"> Razon social</label>
				<input type="text" name="razon_social" id="razon_social" placeholder="Razon social" value="<?php echo $row['razon_social']?>">


				<label for="telefono"> Telefono </label>
			    <input type="text" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $row['telefono']?>">

				<label for="correo"> Correo Electronico </label>
				<input type="email" name="correo" id="correo" placeholder="Correo Electronico" value="<?php echo $row['correo']?>">

				<label for="direccion"> Direccion </label>
				<input type="text" name="direccion" id="direccion" placeholder="Direccion" value="<?php echo $row['direccion']?>">


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