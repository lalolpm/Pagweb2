<?php

	include "funciones/conexion_sql_server.php"; 

	if(!empty($_POST))
	{
		//buscar cliente
		if($_POST['action'] == 'searchCliente')

		{	
		if(!empty($_POST ['cliente']))
			{
				$cod = $_POST['cliente']; 
				$query = sqlsrv_query($conection,"select * from  vista_cliente where cod like '$codigo_cliente' and estado ='1' "); 


				mssql_close($conection); 
				$result = sqlsrv_fetch_array($query); 

				$data = ''; 
				if ($result > 0) {
					$data = mssql_fetch_assoc($query);

				}
				else {
					$data =0; 
				}
			}
			echo json_encode($data,JSON_UNESCAPED_UNICODE); 
		}
	exit;
}

  ?>