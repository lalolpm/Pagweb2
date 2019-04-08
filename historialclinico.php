<?php 
session_start();
include "funciones/conexion_sql_server.php";
$conexion = db_conectar();
$alert= "";

$datos = $_SESSION['iddatos'];

$cliente = $_GET['codigo_datos'];

$sql = ejecutar_query("select * from vista_cliente where codigo_datos='$cliente'",$conexion);
$row = mssql_fetch_array($sql);

$sql = ejecutar_query("select * from vista_usuario where codigo_datos='$datos'",$conexion);
$doctor = mssql_fetch_array($sql);

if(!empty($_POST))
{
	$codigo_cliente = $_POST['codigo_cliente'];
	$codigo_usuario = $_POST['codigo_usuario'];
	$historial_enfermedades = $_POST['historial_enfermedades'];
	$antecedentes = $_POST['antecedentes'];
	$estado = $_POST['estado'];
	$ta = $_POST['ta'];
	$fc = $_POST['fc'];
	$fr = $_POST['fr'];
	$sat02 = $_POST['sat02'];

	$sql = "exec sphistorial_clinico '','$codigo_usuario','$codigo_cliente','$historial_enfermedades','$antecedentes','$estado','ta','fc','fr','$sat02'";

	$resultado = ejecutar_query($sql,$conexion);

	if($resultado){
		$alert = '<p class="msg_save">Consulta realizada</p>';
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<?php include "paginas/scripts.php"; ?>
	<title>Historial Clinico</title>
	<link rel="stylesheet"  href="css/estilosW.css">
</head>
<body>
<?php include "paginas/header.php";  ?>

<section id="container">
	<div class="title_page">
		<h1><i class="fas fa-cube"></i> Historial Clinico</h1>
	</div>
	<hr>
	<div class="datos_cliente">
		

		<center>
			

<div class="main">
	<form name="form_main" id="form_main" method="post" action="">

			<div class="recuadroBorde">
				<div class="alert"><?php echo $alert;?></div>
				
					<div class="agrupa-campos-formulario">
						<div class="action_cliente" >
							<h4> Datos Clientes </h4>
						</div>
						<div class="elementosLineaFormulario">
							<label>Codigo</label>
							<input type="text" name="codigo_cliente" id="codigo_cliente" readonly="" value="<?php echo $row['codigo_cliente']?>" >
						 </div>
						 <div class="elementosLineaFormulario"> 
						 	<label> Nombre </label>
						 	<input type="text" name="nom_cli" id="nom_cli" disabled required value="<?php echo $row['nombre']?>"  >
						 </div>	
						 <div class="elementosLineaFormulario"> 
						 	<label> Sexo </label>
						 	<input type="text" name="sexo" id="sexo" disabled required value="<?php echo $row['sexo']?>" >	
						 </div>
						 <div class="elementosLineaFormulario">
						 	<label>Cedula</label>
						 	<input type="text" name="ced_cli" id="ced_cli" disabled required value="<?php echo $row['DNI']?>" >
						 </div>
						 <div class="elementosLineaFormulario">
						 	<label> Telefono </label>
						 	<input type="text" name="tel_cli" id="tel_cli" disabled required value="<?php echo $row['telefono']?>" >
						 </div>
						 <div class="elementosLineaFormulario">
						 	<label> ARS </label>
						 	<input type="text" name="ars_cli" id="ars_cli" disabled required value="<?php echo $row['descripcion']?>" > 	
						 </div>
						 <div class="elementosLineaFormulario">
						 	<label> Direccion </label>
						 	<input type="text" name="dir_cli" id="dir_cli" disabled required value="<?php echo $row['direccion']?>">  
						 </div>
					</div>

	
   					</br><h4> Datos Doctor</h4></br>

					<div class="agrupar-doctor">
					<div class="elementosLinea">
				 	<label> Codigo Doctor </label>
					<input type="text" name="codigo_usuario" id="codigo_usuario" value="<?php echo $doctor['codigo_usuario']?>" readonly>
					</div>
					<div class="elementosLinea">
					<label> Nombre Doctor </label>
					<input type="text" name="usuario" id="usuario" value="<?php echo $doctor['nombre']?>" readonly>
				 </div>
				 <div class="elementosLinea">
				 	<label> Telefono</label>
				 	<input type="text" name="telefono" id="telefono" value="<?php echo $doctor['telefono']?>" readonly>
				 </div>

				</div> 

			</br><h4> Datos Consulta</h4></br>


			<div class="elementosLinea1">
	   			<label> Motivo Consulta </label>
	   			<textarea name="motivo_consulta" id="motivo_consulta"></textarea>
	   		</div>
	   		<div class="elementosLinea1">
	   			<label> Historial de enfermedades </label> 
	   			<textarea name="historial_enfermedades" id="historial_enfermedades"></textarea>
	   		</div>
	   		<div class="elementosLinea1">
	   			<label> Antecedentes </label>
	   			<textarea name="antecedentes" id="antecedentes"></textarea>
	   		</div>
	   		<div class="elementosLinea1">
	   			<label> Estado General </label>
	   			<textarea  name="estado" id="estado"></textarea>
	   		</div>


</br><h4> Constantes vitales</h4></br>

		<table class="tbl_4pendeja">	
		<thead>
			  		<tr>
			  			<th width="100px"> Tension arterial </th>
			  			<th  > Frec. Cardiaca</th>
			  			<th  > Fr. Respiratoria </th>
			  			<th width="100px"> Temperatura </th>		  			
			  		</tr>

			  		<tr>
			  			<td><input type="text" name="ta" id="ta"></td>
			  			<td><input type="text" name="fc" id="fc"></td>

			  			<td><input type="text" name="fr" id="fr"></td>

			  			<td><input type="text" name="sat02" id="sat02" ></td>
			  		</tr>
		</thead>	
		</table>	
<input type="submit" value="Crear Historial" class="btn_save">
				
			</div>	
		</center>	
	</div>
	
 		


   </div>

   


	
</form>	
</div>	
</section>


<?php include "paginas/footer.php"; ?>


<script src ="js/menu.js"></script>
</body>
</html>




