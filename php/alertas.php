<?php

include 'sesionPhp.php';


if (isset($_GET['DATO'])) {
    $dato = $_GET['DATO'];
    switch ($dato) {
        case "correcto": ?>
            <div class="alert alert-success alert-dismissible fade show" style="text-align: center;" role="alert">
                <strong>¡FELICIDADES!</strong> El gasto se agregó correctamente
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php break;
        case "incorrecto":
        ?>
            <div class="alert alert-danger alert-dismissible fade show" style="text-align: center;" role="alert">
                <strong>¡ERROR!</strong> No se pudo agregar el gasto
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php break;
        case "VACIO": ?>
            <div class="alert alert-warning alert-dismissible fade show" style="text-align: center;" role="alert">
                <strong>¡ADVERTENCIA!</strong> Debe completar todos los campos.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php break;
    }
}
if (isset($_GET['INFORMACION'])) {
    $info = $_GET['INFORMACION'];
    switch ($info) {
        case "correcto": ?>
        <div class="alert alert-success alert-dismissible fade show" style="text-align: center;" role="alert">
            <strong>¡FELICIDADES!</strong> El gasto se elimino correctamente
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php break;
    case "incorrecto":
        ?>
        <div class="alert alert-warning alert-dismissible fade show" style="text-align: center;" role="alert">
            <strong>¡ADVERTENCIA!</strong> Uds no esta autorizado para eliminar.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php break;
    }
}
if (isset($_GET['CARGA'])) {
    $info = $_GET['CARGA'];
    if ($info === 'correcto') {
        echo "<script>alert('Datos cargados correctamente')</script>";
    } else {
        echo "<script>alert('Hubo un error en la carga de los datos')</script>";
    }
}

if (isset($_GET["AUTORIZACION"])) {
    $autorizacion = $_GET["AUTORIZACION"];

    switch ($autorizacion) {

        case "INCORRECTO_SESION": ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Error!</strong> Debe iniciar sesión para entrar a está página.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<?php break;
    } //switch
} //if isset

if (isset($_GET["infoUS"])) {
    $infoUs = $_GET["infoUS"];

    switch ($infoUs) {

        case "incorrecto": ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Error!</strong> No se logro cargar el usuario y la contraseña.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<?php break;
    } //switch
} //if isset