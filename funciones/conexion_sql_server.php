<?php
function db_conectar()
{
	$conexion = mssql_connect("LENOVO-PC\SQLEXPRESS", "xdd", "1234") or die ('No hubo conexión con la base de datos:' . mssql_error());
		
	mssql_select_db('Pagweb2');
	return $conexion;
}

function ejecutar_query($sql, $link)
	{
		$resultado = mssql_query($sql, $link);
		return $resultado;
	}

function traer_fila($resultado)
	{
		$fila=mssql_fetch_row($resultado);
		return $fila;
	}



?>

