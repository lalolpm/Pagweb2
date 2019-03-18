<?php
function db_conectar()
{
	$conexion = mssql_connect('DESKTOP-LI38OGE\SQLEXPRESS','sa','lalo2140305')
		or die('Error al conectar: ' . mssql_error);
		
	mssql_select_db('Pagweb2');
	return $conexion;
}
function ejecutar_query($sql, $link)
	{
		$resultado = mssql_query($sql, $link);
		return $resultado;
	}

	?>