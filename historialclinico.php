

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
	<form name="form_main" id="form_main">

			<div class="recuadroBorde">
				<form name="form_cliente" id="form_cliente" style="padding-top: 5px">
					<div class="agrupa-campos-formulario">
						<div class="action_cliente" >
							<h4> Datos Clientes </h4>
						</div>
						<div class="elementosLineaFormulario">
							<label>Codigo</label>
							<input type="text" name="codigo" id="codigo" >
						 </div>
						 <div class="elementosLineaFormulario"> 
						 	<label> Nombre </label>
						 	<input type="text" name="nom_cli" id="nom_cli" disabled required >
						 </div>	
						 <div class="elementosLineaFormulario"> 
						 	<label> Sexo </label>
						 	<input type="text" name="sexo" id="sexo" disabled required>	
						 </div>
						 <div class="elementosLineaFormulario">
						 	<label>Cedula</label>
						 	<input type="text" name="ced_cli" id="ced_cli" disabled required >
						 </div>
						 <div class="elementosLineaFormulario">
						 	<label> Telefono </label>
						 	<input type="text" name="tel_cli" id="tel_cli" disabled required>
						 </div>
						 <div class="elementosLineaFormulario">
						 	<label> ARS </label>
						 	<input type="text" name="ars_cli" id="ars_cli" disabled required> 	
						 </div>
						 <div class="elementosLineaFormulario">
						 	<label> Direccion </label>
						 	<textarea name="dir_cli" id="dir_cli" disabled required>  </textarea>
						 </div>
					</div>

	
   					<h4> Datos Doctor</h4>
		
					<div class="agrupar-doctor">
					<div class="elementosLinea">
				 	<label> Codigo Doctor </label>
					<input type="text" name="cod_doc" id="cod_doc">
					</div>
					<div class="elementosLinea">
					<label> Nombre Doctor </label>
					<input type="text" name="nom_usu" id="nom_usu">
				 </div>
				 <div class="elementosLinea">
				 	<label> Telefono</label>
				 	<input type="text" name="tel_usu" id="tel_usu">
				 </div>

				</div> 


			<div class="elementosLinea1">
	   			<label> Motivo Consulta </label>
	   			<textarea name="txt_motcon" id="txt_motcon"></textarea>
	   		</div>
	   		<div class="elementosLinea1">
	   			<label> Historial de enfermedades </label> 
	   			<textarea name="txt_hist" id="txt_hist"></textarea>
	   		</div>
	   		<div class="elementosLinea1">
	   			<label> Antecedentes </label>
	   			<textarea name="txt_ant" id="txt_ant"></textarea>
	   		</div>
	   		<div class="elementosLinea1">
	   			<label> Estado General </label>
	   			<textarea  name="txt_est" id="txt_est"></textarea>
	   		</div>



		<table class="tbl_4pendeja">	
		<thead>
			  		<tr>
			  			<th width="100px"> TA: </th>
			  			<th  > FC:</th>
			  			<th  > FR: </th>
			  			<th width="100px"> SAT 02: </th>		  			
			  		</tr>

			  		<tr>
			  			<td><input type="text" name="txt_ta" id="txt_ta"> </td>
			  			<td id="txt_fc"><input type="text" name="txt_fc" id="txt_fc" ></td>

			  			<td id="txt_fr"><input type="text" name="txt_fr" id="txt_fr"></td>

			  			<td><input type="text" name="txt_sat02" id="txt_sat02" ></td>
			  		</tr>
		</thead>	
		</table>	
<input type="submit" value="Crear Historial" class="btn_save">
				</form>
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




