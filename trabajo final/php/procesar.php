<?php
include ("cn.php");

$id = $_POST['id'];
$numero = $_POST['numer'];
$razon = $_POST['razonsocial'];
$control = $_POST['control'];
$firma = $_POST['firma'];
$rubros = $_POST['rubros'];
$fecha = $_POST['fecha'];
$acta = $_POST['acta'];
$patente = $_POST['patente'];
$control2 = $_POST['control2'];

//actualizar datos

$actualizar = "UPDATE hoja4 SET numero='$numero', R.social = '$razon', C.inicial = '$control', firma = '$firma', rubros = '$rubros', fecha = '$fecha', acta = '$acta', patente = '$patente', control2 = '$control2' WHERE id = '$id'";

$resultado = mysqli_query($conexion, $actualizar);
if($resultado){
    echo "<script>alert('Datos cargados correctamente')</script>";
    

}else{
    echo "<script>alert('Error en la carga de datos')</script>";

}
?>