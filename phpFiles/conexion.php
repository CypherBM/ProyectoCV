<?php

function conexionBD(){
		$nombreServidor = "proyectocv.mssql.somee.com";
		$parametrosConexion = array('Database' => 'proyectocv','UID'=>'ProyectoCV_SQLLogin_1','PWD'=>'s9io94kigw' );
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
