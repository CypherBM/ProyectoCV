<?php
include_once("phpFiles/conexion.php");

    if (isset($_POST['action']) && $_POST['action'] == 'CargarCancion') {
        $idCancion = $_POST["id"];

        $sql = "Select * from canciones where idCan = ? ";
        $parametros = array($idCancion);
        $opcion = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $con = conexionBD();
        $resultadoQuery = sqlsrv_query($con, $sql, $parametros, $opcion);
        $cadena = "";

        while ($fila = sqlsrv_fetch_array($resultadoQuery)) {
            $contador = 0;
            if ($fila['idCan'] == $idCancion) {
                $imagenCancion = $fila['imagenCan'];
                $urlCancion = $fila['urlCan'];
                $nombreCancion = $fila['nombreCan'];
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" type="text/css" href="styles/reproductor.scss">
    <script type="text/javascript" src="js/jquery35.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/reproductor.js"></script>
</head>
<body>
    
</body>
</html>

