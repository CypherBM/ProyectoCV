<?php
include_once('conexion.php');

class Cancion
{

    function obtenerCanciones()
    {
        $sql = "select * from canciones";
        $con = conexionBD();
        $resultado = sqlsrv_query($con, $sql);
        //$rowcount = sqlsrv_num_rows($resultado);
        return $resultado;
    }

}


