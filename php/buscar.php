<?php
include 'sesionPhp.php';
if(!empty($_SESSION) ){
include 'cn.php';

$sql_select = "SELECT * FROM `hoja4` ORDER BY id DESC LIMIT 1";
$query2 = mysqli_query($conexion, $sql_select);

$filas = mysqli_num_rows($query2);

if ($filas === 0) {
    echo 'error';
    exit();
} else {
    $datos = mysqli_fetch_assoc($query2);
    echo json_encode($datos, JSON_UNESCAPED_UNICODE);
    exit();
}
} header("location:../index.php?AUTORIZACION=INCORRECTO_SESION");
