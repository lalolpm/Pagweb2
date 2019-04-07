
<?php
	session_start(); 
	include "funciones/conexion_sql_server.php";
	$conexion = db_conectar();
	$alert= "";


	if (!empty($_POST)) 
	{
		
		$Descripcion = $_POST['descripcion'];
		$fecha_registro = $_POST['fecha_registro'];
		$estado = $_POST ['estado'];  

		$sql=" 

			declare @codigo_seguro int 
			set @codigo_seguro =(select max(codigo_seguro) from seguros)

			exec spSeguros '@codigo_seguro','','','$fecha_registro','$Descripcion','1'

		";

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
		

		<form action="" method="post">
				<label for="Codigo"> Codigo</label>
				<input type="text" name="cod_seg" id="cod_seg" placeholder="Nombre Completo">

				<label for="Descripcion"> Descripcion  </label>
				<input type="text" name="des_seg" id="des_seg" placeholder="Descripcion ">
				<label for="fecha_registro"> Fecha Registro</label>
				<input type="date" name="fec_seg" id="fec_seg" placeholder="Fecha Registro">
				<label for="estado"> Estado </label>
				<input type="checkbox" name="estado" id="estado">

				<input type="submit" value="Crear Seguros" class="btn_save">

	</div>


</section>



<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>



