<?php
    include_once("conexion.php");
    $con=conexionBD();
    $sql="select * from canciones";
    $resultado=sqlsrv_query($con,$sql);
    $array=array();
    while($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)){
         $idCancion=$fila["idCan"];
         $nombreCancion=$fila["nombreCan"];
         $urlCan=$fila["urlCan"];
         $imagenCan=$fila["imagenCan"];
         $idArtista=$fila["idArtista"];
        // $array['cols'][]=array('type' => 'string');
         //array('role' => 'style');
         $array []= array(array('name'=>$nombreCancion),array('artist'=>$idArtista),
                                            array('url'=>'canciones/'.$urlCan),array('cover'=>'portadas/'.$imagenCan));

        
    }
    $datos= json_encode($array);
    echo $datos;
    

?>
