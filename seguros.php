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

				<input type="submit" value="Crear Cliente" class="btn_save">

	</div>


</section>



<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>



