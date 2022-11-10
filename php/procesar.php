<?php
include "cn.php";
include "sesionPhp.php";



$id = $_POST['id'];
$numero = $_POST['numero'];
$razon = $_POST['razonsocial'];
$control = $_POST['control'];
$firma = $_POST['firma'];
$rubros = $_POST['rubro'];
$fecha = $_POST['fecha'];
$acta = $_POST['acta'];
$patente = $_POST['patente'];
$control2 = $_POST['control2'];

//actualizar datos

$actualizar = "UPDATE `hoja4` SET `numero` = '$numero', `R.social` = '$razon', `C.inicial` = '$control', `firma` = '$firma', `rubros` = '$rubros', `fecha` = '$fecha', `acta` = '$acta', `patente` = '$patente', `control2` = '$control2' WHERE `hoja4`.`id` = '$id';";
$resultado = mysqli_query($conexion, $actualizar);
if($resultado){
    header("location:../habilitaciones.php?DATO=correcto");
    

}else{
    header("location:../habilitaciones.php?DATO=incorrecto");

}
?>