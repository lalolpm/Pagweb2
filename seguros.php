
<?php
	session_start(); 
	include "funciones/conexion_sql_server.php";
	$conexion = db_conectar();
	$alert= "";


	if (!empty($_POST)) 
	{
		
		$descripcion = $_POST['descripcion'];
		$tipo_seguro = $_POST['tipo_seguro'];  

		$sql="exec spSeguros '','$tipo_seguro','$descripcion','1'
		";

		$resultado = ejecutar_query($sql,$conexion);

		if ($resultado) {
			$alert='<p class= "msg_save"> Seguro creado</p>'; 
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
    <link rel="stylesheet"  href="css/estilosW.css">
</head>
<body>
<?php include "paginas/header.php";  ?>
<section id="container">
	<div class="datos_seguros">
		<h1> Seguros</h1>
	</div>

	<div class="datos_seguros">
		<div class="alert"><?php echo $alert;?></div>
		
		<form action="" method="post">
				<!--<label for="Codigo"> Codigo</label>
				<input type="text" name="cod_seg" id="cod_seg" placeholder="Nombre Completo">-->

				<label for="descripcion"> Descripcion  </label>
				<input type="text" name="descripcion" id="descripcion" placeholder="Descripcion ">

				<label for="tipo_seguro"> Tipo de seguro </label>
				<select name="tipo_seguro">
					<option value="1"> Full </option>
				</select>
				<!--<label for="fecha_registro"> Fecha Registro</label>
				<input type="date" name="fec_seg" id="fec_seg" placeholder="Fecha Registro">-->

				<label for="estado"> Estado </label>
				<input type="checkbox" name="estado" id="estado">

				<input type="submit" value="Crear Seguro" class="btn_save">

	</div>


</section>



<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>



