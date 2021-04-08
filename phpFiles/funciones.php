<?php
include_once("conexion.php");
function comprobacionUsuario($usuario, $clave)
{
    $sql = "Select * from usuarios where idUsu = ? and claveUsu = ?";
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

function registrarUsuario($usuario, $clave, $nombre, $genero, $rol, $correo)
{
    $sql = "Insert into usuarios 
            values(?,?,?,?,?,?)";
    $parametros = array($usuario, $clave, $nombre, $genero, $rol, $correo);
    $con = conexionBD();
    $resultadoQuery = sqlsrv_query($con, $sql, $parametros);
    $contador = 0;
    if ($resultadoQuery) {
        $contador = 1;
    }
    return $contador;
}

function sqlDeterminarRol()
{
    $usr = $_SESSION['usuario'];
    include_once("conexion.php");
    $sql = "select perfilUsu,nombreUsu from usuarios where idUsu=?";
    $parametros = array($usr);
    $con = conexionBD();
    $resultado = sqlsrv_query($con, $sql, $parametros);
    $cadena = "";
    while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
        if ($fila["perfilUsu"] == "artista") {
            $cadena .= 'Subir canciones';
        } else {
            $cadena .= '  Disfruta de la aplicacion ';
        }
    }
    return $cadena;
}

function metodo($nombre, $song)
{

    include_once("conexion.php");
    $usr = $_SESSION['usuario'];
    $sql = "Insert into canciones values
            (?,?,?)";
    $parametros = array($nombre, $song, $usr);
    $con = conexionBD();
    $resultado = sqlsrv_query($con, $sql, $parametros);
    $op = 0;
    if ($resultado) {
        $op = 1;
    }
    return $op;
}

function sqlcargarCanciones()
{
    $sql = "select * from canciones";
    $con = conexionBD();
    $resultado = sqlsrv_query($con, $sql);
    $cadena = "";
    //$indice = 1;
    while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
        $cadena .= "<div class='col-md-3'>
                    <a href='javascript:void();' class='album-poster' data-switch='" . $fila['idCan'] . "'>
                    <img class='img-card' src='portadas/" . $fila['imagenCan'] . "'>
                    </a>
                    <div class='detail-box'>
                        <div class='type'>
                            <h4>".$fila['nombreCan']."</h4>
                            <p>".$fila['idArtista']."</p>
                        </div>
                        <!--price-------->
                        <a href='canciones/".$fila['urlCan']."' class='descarga' download='".$fila['nombreCan']."'><i class='far fa-arrow-alt-circle-down'></i></a>
                    </div>
                    </div>";
    }
    return $cadena;
}

function sqlNombreBase()
{
    $usr = $_SESSION['usuario'];
    include_once("conexion.php");
    $sql = "select nombreUsu   
    from usuarios where idUsu=?";
    $parametros = array($usr);
    $con = conexionBD();
    $resultado = sqlsrv_query($con, $sql, $parametros);
    $cadena = "";
    while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
        $cadena .= '								  
                  <div >
                  <table>																					
                    <td>' . $fila["nombreUsu"] . '</td>
                  </table>
                  </div>			  							  
                  ';
    }
    return $cadena;
}
