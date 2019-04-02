

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
				</form>
			</div>	
		</center>	
	</div>

   <div class="datos_doctor">
  	 	<div class="action_doctor">
   			<h5> Datos Doctor</h5>
		</div>


		<form name="form_doctor" id="form_doctor" class="datos_doctor">
			
			<div class="wd30">
			 	<label> Codigo Doctor </label>
				<input type="text" name="cod_doc" id="cod_doc">
			</div>
			<div class="wd30">
				<label> Nombre Doctor </label>
				<input type="text" name="nom_usu" id="nom_usu">
			 </div>
			 <div class="wd30">
			 	<label> Telefono</label>
			 	<input type="text" name="tel_usu" id="tel_usu">
			 </div>

		</form>


   </div>

   <div class="datos_consulta">
	   	<div class="action_consulta">
	   		<h6> Datos Consulta</h6>
	   	</div>

   		<form name="form_consulta" id="form_consulta" class="datos_consulta">
   		
	   		<div class="dd30">
	   			<label> Motivo Consulta </label>
	   			<textarea name="txt_motcon" id="txt_motcon"></textarea>
	   		</div>
	   		<div class="dd40">
	   			<label> Historial de enfermedades </label> 
	   			<textarea name="txt_hist" id="txt_hist"></textarea>
	   		</div>
	   		<div class="dd50">
	   			<label> Antecedentes </label>
	   			<textarea name="txt_ant" id="txt_ant"></textarea>
	   		</div>
	   		<div class="dd60">
	   			<label> Estado General </label>
	   			<textarea  name="txt_est" id="txt_est"></textarea>
	   		</div>

   		
  	 		</form>



  	 </div>

<div class="datos_4pendeja">
	<div class="action_4pendeja"></div>

	<form name="form_4pendeja" id="form_4pendeja" class="datos_4pendeja1">
		
		<div class="dd100">
   			<label> TA: </label>
   			<input type="text" name="txt_ta" id="txtta">
   		</div>
   		<div class="dd100">
   			<label> FC: </label>
   			<input type="text" name="txt_fc" id="txt_fc">
   		</div>
   		<div class="dd100"> 
   			<label> FR: </label>
   			<input type="text" name="txt_fr" id="txt_fr">
   		</div>
   		<div class="dd100"> 
   			<label> Sat 02: </label>
   			<input type="text" name="txt_sat" id="txt_sat">
   	    </div>

	</form>
</div>
	

</section>


<?php include "paginas/footer.php"; ?>


<script src ="js/menu.js"></script>
</body>
</html>




