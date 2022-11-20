<?php
include 'php/fecha.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilos/normalize.css">
    <link rel="stylesheet" href="stilos/style.css">
    <title>Habilitación de vehículos</title>
</head>

<body>
    <div class="cont-fecha"><?php echo "<p class='fecha'>" . $date . "</p>"; ?></div>
    <div id="portada" class="portada">
        <h1>Bienvenido/a a Bromatología área habilitación de vehículos</h1>
    </div>
    <div class="hidden" id="form">
        <form action="php/validar.php" method="post" class="formulario">
            <div class="cont--titulo">
                <h3 class="titulo">Inicio de sesión</h3>
            </div>

            <label for="usuario">Nombre de usuario:</label>
            <input type="text" name="usuario" id="usuario" class="usuario input" placeholder="Nombre de usuario">
            <div class="error--usuario"></div>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" class="contraseña input" placeholder="Contraseña">
            <div class="error--contraseña"></div>
            <label for="capchat">Complete el captcha: <div class="cont-C"><img src="refresh.png" alt="refresh" width="60" height="60" id="refresh"><span class="cont--cap"></span></div></label>
            <input type="text" id="captchaInicial" class="captchaInicial input" placeholder="Captcha">
            <div class="error--capt"></div>


            <input type="submit" value="Iniciar sesón" class="btn">

        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script/proyectoJquery.js"></script>
    <script src="script/portada.js"></script>
    <script src="script/reCaptcha.js"></script>


</body>

</html>