<?php
 
$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;//inicio de sesion



$conexion = mysqli_connect("localhost", "root", "", "habilitaciones");//conectar a la base de datos

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";//consulta a la base de datos para validar usuario y contraseña
$resultado = mysqli_query($conexion, $consulta);//asegurarse q la conexion y la consulta fueron exitosas

$filas = mysqli_num_rows($resultado);//validar que el usaurio y la contraseña coincidan. Si no coinciden filas seria null o 0.
if ($filas){
    header("location:../habilitaciones.php");
}else{
    ?>
        <script>alert('Error en la validacion')</script>
        <script>window.location.replace("../inicioSesion.html");</script>
    <?php

}
mysqli_free_result($resultado);//cerrar conexion a la base de datos
mysqli_close($conexion);
?> 