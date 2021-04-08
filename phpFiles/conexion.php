<?php
	//sqlsrv_connect // para generar la conexión
	//sqlsrv_errors(); // muestra errores, no necesita parámetros
	//sqlsrv_query() // ejecutar las sentencias sql"select * from usuarios" o 'select * from usuarios'

	/**
	 * 
	 */
	
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

		return $conexion;
	}

	

	  
?>