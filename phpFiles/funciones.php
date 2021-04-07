<?php
include_once("conexion.php");
function comprobacionUsuario($usuario,$clave){
    $sql = "Select * from usuario2 where idUsu = ? and claveUsu = ?";
    $parametros = array($usuario, $clave);
    $opcion = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
    $con = conexionBD();
    $resultadoQuery = sqlsrv_query($con, $sql, $parametros, $opcion);
    while ($fila = sqlsrv_fetch_array($resultadoQuery)) {
        $contador = 0;
        if ($fila['idUsu'] == $usuario && $fila['claveUsu'] == $clave) {
            $contador = 1;
        }
        return $contador;
    }
}

function registrarUsuario($usuario,$clave,$nombre,$genero,$rol,$correo){
    $sql = "Insert into usuario2 
            values(?,?,?,?,?,?)";
    $parametros = array($usuario,$clave,$nombre,$genero,$rol,$correo);
    $con = conexionBD();
    $resultadoQuery = sqlsrv_query($con, $sql, $parametros);
        $contador = 0;
        if ($resultadoQuery) {
            $contador = 1;
        }
        return $contador;
}

function sqlDeterminarRol(){
        $usr = $_SESSION['usuario'];
        include_once("conexion.php");
        $sql="select perfilUsu,nombreUsu from usuario2 where idUsu=?";
        $parametros=array($usr);	
        $con = conexionBD();
        $resultado = sqlsrv_query($con, $sql,$parametros);
        $cadena="";
        while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
            $cadena.=''.$fila["perfilUsu"].'';
        }
        return $cadena;
}

function metodo($nombre,$song)
{    
    
    include_once("conexion.php");
    $usr = $_SESSION['usuario'];
    $sql="Insert into canciones values
            (?,?,?)";
	$parametros=array($nombre,$song,$usr);
	$con=conexionBD();
	$resultado=sqlsrv_query($con, $sql, $parametros);
	$op=0;
	if($resultado)
	{
		$op=1;
	}
	return $op;

}
?>