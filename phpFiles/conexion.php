<?php

function conexionBD(){
		$nombreServidor = "localhost";
		$parametrosConexion = array('Database' => 'proyecto','UID'=>'sa','PWD'=>'bemn2000!' );
		$conexion = sqlsrv_connect($nombreServidor,$parametrosConexion);
		if($conexion)
		{
			//echo "Conexion exitosa";
		}
		else
		{
			echo "Error en la conexion";
			die(print_r(sqlsrv_errors(),true));

		}
    }

?>
