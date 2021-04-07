<?php
include_once("funciones.php");
if(!isset($_SESSION))
{
    session_start(); // Inicializa y permite el uso de variables de sesion, si no inicializamos no vamor poder usar
}
if(isset($_POST['action']) && $_POST['action']=='comprobarUsuario')
{
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $_SESSION["usuario"]=$usuario;
    //$resultado="no";
    $resultado = comprobacionUsuario($usuario,$clave);
    //if($resultado>)
    echo $resultado;
}
if(isset($_POST['action']) && $_POST['action']=='registrarUsuario')
{
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $nombre=$_POST["nombre"];
    $rol=$_POST["rol"];
    $genero=$_POST["genero"];
    $correo=$_POST["correo"];
    $_SESSION["rol"]=$rol;
    $_SESSION["usuario"]=$usuario;
    //$resultado="no";
    $resultado = registrarUsuario($usuario,$clave,$nombre,$genero,$rol,$correo);
    //if($resultado>)
    echo $resultado;
}

function determinarRol(){
  return sqlDeterminarRol();
}
?>