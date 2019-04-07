<?php 
include 'conexion_sql_server.php';

$numero = db_conectar();

echo 'numero = ' . $numero;


function ejecutar_query($sql, $link)
	{
		$resultado = mssql_query($sql, $link);
		return $resultado;
	}

function traer_fila($resultado)
	{
		$fila = mssql_fetch_row($resultado);
		return $fila;
	}


	function ejecutar_query($sql, $link)
	{
		$resultado = mssql_query($sql, $link);
		return $resultado;
	}
	function numero_filas($resultado)
	{
		return mssql_num_rows($resultado);
	}
?>

