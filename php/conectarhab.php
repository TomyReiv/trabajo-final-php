<?php
include 'sesionPhp.php';
if (!empty($_POST['numero'])) {
    include 'cn.php';


    $numero = $_POST['numero'];
    $razon = $_POST['razonsocial'];
    $control = $_POST['control0'];
    $firma = $_POST['firma'];
    $rubros = $_POST['rubro'];
    $fecha = $_POST['fecha'];
    $acta = $_POST['acta'];
    $patente = $_POST['patente'];
    $control2 = $_POST['control2'];




    $insertar = "INSERT INTO `hoja4`( `numero`, `R.social`, `C.inicial`, `firma`, `rubros`, `fecha`, `acta`, `patente`, `control2`) VALUES ('$numero','$razon','$control','$firma','$rubros','$fecha','$acta','$patente','$control2')";
    /* $insertar = "INSERT INTO hoja4 (numero, R.social, C.inicial, firma, rubros, fecha, acta, patente, control2) VALUES ('$numero', '$razon', '$control', '$firma', '$rubros', '$fecha', '$acta', '$patente', '$control2')"; */
    $query = mysqli_query($conexion, $insertar);

    if ($query) {

        header("location:../habilitaciones.php?DATO=correcto");
    } else {

        header("location:../habilitaciones.php?DATO=incorrecto");
    }
} else {
    header("location:../habilitaciones.php?DATO=VACIO");
}
