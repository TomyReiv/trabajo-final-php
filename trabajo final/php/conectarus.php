<?php

require 'conectar.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

echo $usuario;

$insertar = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario', '$contraseña')";
$query = mysqli_query($conectar, $insertar);

if($query){
    echo "<script>alert('Datos cargados correctamente')</script>";
    header("location:../index.html");

}else{
    echo "<script>alert('Error en la carga de datos')</script>";
  
}
?>