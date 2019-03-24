


<?php 

if (!empty($_POST))
	{
		$alert = ''; 
		if (empty($_POST['nombre']) || empty($_POST['cedula']) || empty($_POST['clave']) ||
			empty($_POST['Usuario'])) 
		{
		
		$alert = '<p class="msg_error"> Debe LLenar los campos Nombre,Cedula,Clave,Usuario.</p>';	

		}else 
			{
				include "funciones/conexion_sql_server.php"; 

				$nombre  = $_POST['nombre']; 
				$cedula  = $_POST['cedula']; 
				$correo  = $_POST['correo']; 
				$Usuario = $_POST['Usuario']; 
				$clave   = $_POST['clave']; 
				$rol     = $_POST['rol']; 


					$conexion = db_conectar();
					$sql = "exec spdatos '','1','$nombre','$cedula'		,'','','','1'

							declare @codigo_datos int 
							set @codigo_datos= (select max(codigo_datos) from datos)

							exec spUsuario '',
							@codigo_datos,
							$rol,
							'$Usuario',
							'$clave',
							'',
							'',
							'1'";			
		            $resultado = ejecutar_query($sql, $conexion);

			}

		$alert= '<p class="msg_save"> Datos salvados correctamente </p>';



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
		<div class="Registro_usuario">
			
			<h1>Registro Usuario </h1>
			<hr>
			<div class="alert"></div>

			<form action="" method="post">
				<label for="nombre"> Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo">
				
				<label for="cedula"> Cedula o RNC  </label>
				<input type="text" name="cedula" id="cedula" placeholder="cedula o RNC">
				
				<label for="correo"> Correo Electronico </label>
				<input type="email" name="correo" id="correo" placeholder="Correo Electronico">
				
				<label for="direccion"> Usuario </label>
				<input type="text" name="Usuario" id="Usuario" placeholder="Usuario">
				
				<label for="clave"> Clave </label>
				<input type="password" name="clave" id="clave" placeholder="clave de acceso">

				<label for="rol"> Tipo de Usuario </label>
			    <select name="rol" id="rol">
			    	<option value="1"> Administracion </option>
			    	<option value="2"> Doctor</option>
			    	<option value="3"> Enfermero </option>
			    	<option value="4"> Cajero </option>

			    </select>

				<input type="submit" value="Crear Usuario" class="btn_sav">






			</form>
		</div>

	</section>


<?php include "paginas/footer.php"; ?>

<script src ="js/menu.js"></script>
		
</body>
</html>