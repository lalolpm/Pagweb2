
<header>
<?php session_start(); ?>
	
	<h3 align="left"> <?php echo 'Hola, '. $_SESSION['usuario']?></h3>
	<h1 class="nombre"> Buho Consulting </h1>



	<input type="checkbox" id="btn-menu">
	<label for="btn-menu" class="icon-menu"> </label>

	<nav class="menu">


		
		<ul>
			<li><a href="#"> Inicio </a></li>
			<li class="submenu"><a href="#"> Mantenimientos <span class="icon-down-open"></span></a>
				<ul>
					<li> <a href="Clientes.php"> Resgistro de Clientes </a></li>	
					<li> <a href=""> Registro Seguros</a></li>	
					<li> <a href="Usuario.php">  Registro Usuarios </a></li>
					<li>  <a href="articulos.php"> Registro de Articulos</a> </li>
<<<<<<< HEAD
					<li>  <a href="actulizar_datos.php"> Actualizar datos</a> </li>
					<li>  <a href="suplidores.php"> Registro  Suplidor </a> </li>
=======
					<li>  <a href="actulizar_datos.php"> Actualizar usuario</a> </li>
					<li><a href="lista_clientes.php">Lista clientes</a></li>
>>>>>>> parent of 325d750... g

				</ul>
			</li>
			<li class="submenu" ><a href="#">  Procesos <span class="icon-down-open"></span></a>
				<ul>
					<li> <a href="historialclinico.php"> Historial  Clinico </a></li>
					<li> <a href="facturacion.php"> Facturación </a></li>
					<li> <a href=""> sub item 3 </a></li>
					<li> <a href=""> sub item 3  </a></li>
				</ul>
			</li>

			<li><a href="#"> Reportes <span class="icon-down-open"></span></a>
				<ul>
					<li> <a href="">  Clientes </a></li>
					<li> <a href="">  Seguros </a></li>
				</ul>

			</li>
		</ul>
	</nav>

	<div>
	<a href="salir.php"><img src="img/cerrar3.png" width="30" height="30" align="left"></a>
		</div>
</header>	