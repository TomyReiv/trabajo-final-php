

<?php


 if(isset($_POST['usuario'])){

include 'cn.php';//conectar a la base de datos


 $usuario= $_POST['usuario'];
 $contraseña= $_POST['contraseña'];
 
 session_start();
 $_SESSION['usuario']=$usuario;//inicio de sesion
 

 $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
 $fecha_inicio = $_SESSION["ultimoAcceso"];
 
 
 $agregar = "UPDATE `usuarios` SET `fecha_inicio` = ('$fecha_inicio') WHERE `usuarios`.`usuario` = ('$usuario');";
 $qry = mysqli_query($conexion, $agregar);

 $consulta1="SELECT * FROM usuarios WHERE usuario='$usuario'";
 $consulta2="SELECT * FROM usuarios WHERE contraseña='$contraseña'";
 
 $res1=mysqli_query($conexion, $consulta1);
 $res2=mysqli_query($conexion, $consulta2);

 $fila1 = mysqli_num_rows($res1);
 $fila2 = mysqli_num_rows($res2);//validar que el usaurio y la contraseña coincidan. Si no coinciden filas seria null o 0.
 
 if($fila1 AND $fila2){
     header("location:../habilitaciones.php");
 }else{
     if($fila1){
       /*  echo "<h4 class='errorVal'>Contraseña incorrecta</h4>"; */
       header("location:../index.php?CONTRASEÑA=incorrecto");
       
     }else{
         if($fila2){
           /*  echo "<h4 class='errorVal'>Usuario incorrecta</h4>"; */
           header("location:../index.php?USUARIO=incorrecto");
            
         }else{
            echo "<h4 class='errorVal'>Datos incorrecta</h4>";
            header("location:../index.php");
            
         }
     }
 }
 

 mysqli_free_result($res1);
 mysqli_free_result($res2);///cerrar conexion a la base de datos
 mysqli_close($conexion);
}
?> 