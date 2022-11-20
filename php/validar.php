

<?php


if (isset($_POST['usuario'])) {

  include 'cn.php'; //conectar a la base de datos


  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];

  session_start();
  $_SESSION['usuario'] = $usuario; //inicio de sesion


  $_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s");
  $fecha_inicio = $_SESSION["ultimoAcceso"];


  $agregar = "UPDATE `usuarios` SET `fecha_inicio` = ('$fecha_inicio') WHERE `usuarios`.`usuario` = ('$usuario');";
  $qry = mysqli_query($conexion, $agregar);



  $consulta = "SELECT * FROM usuarios";
  $query = mysqli_query($conexion, $consulta);

  $fila = mysqli_num_rows($query);
  if ($fila === 0) {
    echo 'error';
    exit();
  } else {
    $datos = mysqli_fetch_assoc($query);
    echo json_encode($datos, JSON_UNESCAPED_UNICODE);
    exit();
  }

}
exit();
?> 