<?php
include "sesionPhp.php";
include "cn.php";
$usuario = $_SESSION['usuario'];
if($usuario==='Tomas'){
    $id = $_GET['id'];
    $eliminar = "DELETE FROM hoja4 WHERE id='$id'";
    $sql=mysqli_query($conexion, $eliminar);
    header("location:../habilitaciones.php?INFORMACION=correcto");
}else{
    header("location:../habilitaciones.php?INFORMACION=incorrecto");
}


?>