<?php
include_once('conexion.php');
$busquedaArtista = $_POST['palabra_clave'];

$sql = "SELECT  * FROM usuarios WHERE perfilUsu = 'artista' and idUsu LIKE '%$busquedaArtista%'";
$con = conexionBD();
$resultado = sqlsrv_query($con, $sql);

if ($busquedaArtista !== "") {
  while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {

    echo "<img src='imgUsu/" . $fila['imagenUsu'] . "' height='50px' width='50px'>&nbsp;&nbsp;<a>" . $fila['idUsu'] . "</a>";
    echo "<br><br>";
  }
} else {
  echo "No se encontraron resultados para tu busqueda";
}

?>