<?php
session_start();
session_unset();
if($_SESSION["usuario"]==""){
    header('Location: index.php');
}
?>