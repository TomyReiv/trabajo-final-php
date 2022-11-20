<?php
include 'php/sesion.php';
include 'php/fecha.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilos/style.css">
    <link rel="stylesheet" href="stilos/normalize.css">
    <title>Habilitación de vehículos</title>
</head>
<body>
    <div class="cont-fecha"><?php echo "<p class='fecha'>".$date."</p>"; ?></div>
    <div class="cont--form">
        <form action="php/conectarus.php" method="post" class="formulario" >
            <div class="cont--titulo"> 
                <h3 class="titulo">Registrarse</h3>
            </div>
           
            <label for="usuario">Nombre de usuario:</label>
            <input type="text" name="usuario" id="usuario" class="usuario input" placeholder="Usuario" autocomplete="off">
            <div class="error--usuario"></div>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" class="contraseña input" placeholder="Contraseña" autocomplete="off">
            <div class="error--contraseña"></div>
            <label for="contraseña">Confirmar contraseña:</label>
            <input type="password" name="contraseña2" id="contraseña2" class="contraseña2 input" placeholder="Confirmar contraseña" autocomplete="off">
            <div class="error--contraseña2"></div>
            <label for="capchat">Complete el captcha: <div class="cont-C"><img src="refresh.png" alt="refresh" width="60" height="60" id="refresh"><span class="cont--cap"></span></div></label>
            <input type="text" id="captchaInicial" class="captchaInicial input" placeholder="Captcha">
            <div class="error--capt"></div>

            <input type="submit" value="Registrarse" class="btn">

            <div class="cont--derivados">
                <a href="index.php" class="header--derivado">Inicio de sesión</a>
            </div>
        </form>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script/errorUsuarioRegistro.js"></script>
    <script src="script/confirPass.js"></script>
    <script src="script/reCaptcha.js"></script>


<?php
include 'php/alertas.php';
?>
</body>
</html>