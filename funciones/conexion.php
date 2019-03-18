<?php 
include 'conexion_sql_server.php';

$numero = db_conectar();

echo 'numero = ' . $numero;


function ejecutar_query($sql, $link)
	{
		$resultado = mssql_query($sql, $link);
		return $resultado;
	}


?>

