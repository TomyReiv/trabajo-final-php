<?php /* cierre de la sesion */
session_start();
unset($_SESSION['usuario']);
header("location:../inicioSesion.html");
die();

?>