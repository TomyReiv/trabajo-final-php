<?php


$numero = $_POST['numero'];
$razon = $_POST['razonsocial'];
$control = $_POST['control0'];
$firma = $_POST['firma'];
$rubros = $_POST['rubro'];
$fecha = $_POST['fecha'];
$acta = $_POST['acta'];
$patente = $_POST['patente'];
$control2 = $_POST['control2'];

echo $razon;

$conectar = mysqli_connect("localhost", "root", "", "habilitaciones");
$insertar = "INSERT INTO `hoja4`( `numero`, `R.social`, `C.inicial`, `firma`, `rubros`, `fecha`, `acta`, `patente`, `control2`) VALUES ('$numero','$razon','$control','$firma','$rubros','$fecha','$acta','$patente','$control2')";
/* $insertar = "INSERT INTO hoja4 (numero, R.social, C.inicial, firma, rubros, fecha, acta, patente, control2) VALUES ('$numero', '$razon', '$control', '$firma', '$rubros', '$fecha', '$acta', '$patente', '$control2')"; */
$query = mysqli_query($conectar, $insertar);

if($query){
    echo "<script>alert('Datos cargados correctamente')</script>";
    header("location:../habilitaciones.php");

}else{
    echo "<script>alert('Error en la carga de datos')</script>";
    header("location:../habilitaciones.php");
}
?>