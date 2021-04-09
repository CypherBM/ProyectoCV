<?php
include_once("conexion.php");
function comprobacionUsuario($usuario, $clave)
{
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

function registrarUsuario($usuario, $clave, $nombre, $genero, $rol, $correo)
{
    $sql = "Insert into usuario2 
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
    $sql = "select perfilUsu,nombreUsu from usuario2 where idUsu=?";
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
            (?,?,'portada.png',?,'0')";
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
                        <a href='canciones/".$fila['urlCan']."' class='descarga' download='".$fila['nombreCan']."'><i class='far fa-arrow-alt-circle-down'></i></a>
                        <button id='".$fila['idCan']."' href='canciones/".$fila['urlCan']."' onclick='obtenerID(this.id);' class='descarga border-0 rounded-circle'><i class='far fa-play-circle'></i></button>
                    </div>
                    </div>";
    }
    return $cadena;
}

function sqlCargarReproductor($idCancion){
    
    $sql = "select * from canciones where idCan= ? ";
    $con = conexionBD();
    $parametros = array($idCancion);
    $resultado = sqlsrv_query($con, $sql,$parametros);
    $cadena = "";
    $fila = sqlsrv_fetch_array($resultado);
    //$indice = 1;
        
        //$idCancion = $_POST["id"];
    
   /* while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
        $cadena .= "";
    }*/

    $f2 = json_encode($fila);
    echo $f2;
    //$_SESSION['idCancion'] = $idCancion;
    //return $cadena;
}

/*function sqlCargarReproductor($idCancion){
    
    $sql = "select * from canciones where idCan= ? ";
    $con = conexionBD();
    $parametros = array($idCancion);
    $resultado = sqlsrv_query($con, $sql,$parametros);
    $cadena = "";
    //$indice = 1;
        
        //$idCancion = $_POST["id"];
    
    while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
        $cadena .= "<div class='container'>
        <div class='audioPlayer'>
            <div class='playerContainer'>
                <div class='albumArt'>
                    <img src='portadas/".$fila['imagenCan']."'>
                </div>

                <div class='info'>
                    <div class='audioName'>
                        ".$fila['nombreCan']."
                    </div>
                    <div class='seekBar'>
                        <span class='outer'>
                            <span class='inner'></span>
                        </span>
                    </div>
                    <div class='timing'>
                        <span class='start'>0.00</span>
                        <span class='end'>0.00</span>
                    </div>
                </div>

                <div class='volumeControl'>
                    <div class='wrapper'>
                        <i class='fa fa-volume-up'></i>
                        <span class='outer'>
                            <span class=inner'></span>
                        </span>
                    </div>
                </div>

                <button class='btn play'>
                    <i class='fa fa-play'></i>
                    <i class='fa fa-pause'></i>
                </button>
                <audio class='audio'>
                    <source src='canciones/".$fila['urlCan']."'>
                </audio>
            </div>
        </div>
    </div>";
    }
    $_SESSION['idCancion'] = $idCancion;
    return $cadena;
}*/


function sqlNombreBase()
{
    $usr = $_SESSION['usuario'];
    include_once("conexion.php");
    $sql = "select nombreUsu   
    from usuario2 where idUsu=?";
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
function registrarPlaylist($nombre,$descripcion){
    
    $sql = "Insert into playlist values
            (?,?,?)";
    $parametros = array($nombre, $descripcion,$nombre);
    $con = conexionBD();
    $resultado = sqlsrv_query($con, $sql, $parametros);
    $op = 0;
    if ($resultado) {
        $op = 1;
    }
    return $op;
}

function sqlListas(){
    $sql="select * from playlist";
    $con = conexionBD();
    $resultado = sqlsrv_query($con, $sql);
    $cadena = "";
    //$indice = 1;
    while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
        $cadena .= "<button>añadir canciones</button>
        <a class='nav-link' id='v-pills-profile-tab' data-toggle='pill' href='#".$fila['accion']."' role='tab' aria-controls='v-pills-profile' aria-selected='false'>".$fila['nombrePlay']."</a>            
            </div>
        <div class='tab-content' id='v-pills-tabContent'>
                    <div class='tab-pane fade' id=".$fila['accion']." role='tabpanel' aria-labelledby='list-profile-list'>".sqlcargarCancionesLista($fila['idPlay'])."</div>
                    ";
    }
    return $cadena;
}
function sqlcargarCancionesLista($id)
{
    $sql = "select * from canciones where idPlay=?";
    $parametros=array($id);
    $con = conexionBD();
    $resultado = sqlsrv_query($con, $sql,$parametros);
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


