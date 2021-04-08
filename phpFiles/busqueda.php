<?php
include_once('conexion.php');

$palabraBusqueda = $_POST['palabra_principal'];

//echo $palabraBusqueda;

$sql = "SELECT  * FROM canciones WHERE nombreCan LIKE '%$palabraBusqueda%'";
$con = conexionBD();
$resultado = sqlsrv_query($con,$sql);

    if($palabraBusqueda !== "")
    {
    while ($fila = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC))
    { 

      echo "<img src='portadas/".$fila['imagenCan']."' height='50px' width='50px'>&nbsp;&nbsp;<a>".$fila['nombreCan']."</a>"; 
      echo "<br><br>";
 
    }
}else{
    echo "No hay ni vrgas";
}
