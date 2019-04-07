<?php
function db_conectar()
{
	$conexion = mssql_connect('DESKTOP-LI38OGE\SQLEXPRESS','sa','lalo2140305')
		or die('Error al conectar: ' . mssql_error);
		
	mssql_select_db('clinica');
	return $conexion;
}

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