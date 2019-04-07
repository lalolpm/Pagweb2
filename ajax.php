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
				$query = ejecutar_query($conection,"select * from  cliente where cod like '$codigo_cliente' and estado ='1' "); 


				sqlsrv_close($conection); 
				$result = sqlsrv_num_rows($query); 

				$data = ''; 
				if ($result > 0) {
					$data = sqlsrv_fetch_assoc($query);
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