<?php
include 'sesionPhp.php';
if(!empty($_POST['usuario'])){
    include 'cn.php';
   

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $consulta="SELECT usuario FROM usuarios WHERE usuario='$usuario'";
    $validar = mysqli_query($conexion, $consulta);
    
    if(mysqli_num_rows($validar) === 0){
       $insertar = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario', '$contraseña')";
        $query = mysqli_query($conexion, $insertar);

        if($query){
            
            echo "Correcto";

        }else{
            echo "Incorrecto";
        
        }
    }else{
        echo "Sistema";
        }
}else{
    header("location:../index.php");
}
?>