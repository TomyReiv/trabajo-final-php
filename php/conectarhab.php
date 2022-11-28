<?php
include 'sesionPhp.php';
if (!empty($_GET['numero'])) {
    include 'cn.php';


    $numero = $_GET['numero'];
    $razon = $_GET['razonsocial'];
    $control = $_GET['control0'];
    $firma = $_GET['firma'];
    $rubros = $_GET['rubro'];
    $fecha = $_GET['fecha'];
    $acta = $_GET['acta'];
    $patente = $_GET['patente'];
    $control2 = $_GET['control2'];




    $insertar = "INSERT INTO `hoja4`( `numero`, `R_social`, `C_inicial`, `firma`, `rubros`, `fecha`, `acta`, `patente`, `control2`) VALUES ('$numero','$razon','$control','$firma','$rubros','$fecha','$acta','$patente','$control2')";
    $query = mysqli_query($conexion, $insertar);


    if ($query) {
      

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
    }
} else {

    header("location:../habilitaciones.php?DATO=VACIO");
} header("location:../index.php?AUTORIZACION=INCORRECTO_SESION");
