<?php

	include "funciones/conexion_sql_server.php"; 
	$conexion = db_conectar();

	if(!empty($_POST))
	{
		//buscar cliente
		if($_POST['action'] == 'searchCliente')

		{	
		if(!empty($_POST ['cliente']))
			{
				$cod = $_POST['cliente']; 
				$query = ejecutar_query("select * from  vista_cliente
				 where codigo_cliente LIKE '$cod'  ",$conexion); 


				mssql_close($conexion); 
				$result = mssql_num_rows($query); 

				$data = ''; 
				if ($result > 0) {
					$data = mssql_fetch_array($query);

				}
				else {
					$data =0; 
				}
			}
			echo json_encode($data); 
		}

		//buscar cliente
		if($_POST['action'] == 'searchProducto')

		{	
		if(!empty($_POST ['producto']))
			{
				$cod = $_POST['producto']; 
				$query = ejecutar_query("select * from productos
				 where codigo_producto LIKE '$cod'  ",$conexion); 


				mssql_close($conexion); 
				$result = mssql_num_rows($query); 

				$data = ''; 
				if ($result > 0) {
					$data = mssql_fetch_array($query);

				}
				else {
					$data =0; 
				}
			}
			echo json_encode($data); 
		}
	exit;
}


  ?>