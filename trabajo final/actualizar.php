<?php
   
   $conexion = mysqli_connect("localhost", "root", "", "habilitaciones");
    mysqli_set_charset($conexion, "utf8");

    $id = $_GET['id'];/* el id se lo damos en habilitaciones.php */
    $consulta = "SELECT * FROM hoja4 WHERE id = '$id'";/* igual que en la busqueda pero se usa el numero de id para seleccionar los datos especificos */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <link rel="stylesheet" href="stilos/style2.css">
    <title>Edicion</title>
</head>
<body>
    <div class="conteiner">
        <br>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h4 class="text-center titulo">Panel de edición</h4>
        </div>
        <br>
        <div class="col-sm-12 col-md-12 col-lg-12">

            <form action="php/procesar.php" method="post" >
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-muted">
                                <th>id</th>
                                <th>Numero de habilitacion</th>
                                <th>Razón social</th>
                                <th>Citación a control de frio</th>
                                <th>Firma</th>
                                <th>Rubro</th>
                                <th>Fecha</th>
                                <th>Acta</th>
                                <th>Patente</th>
                                <th>Control de frio/Constataciones</th>
                                <th>Operaciones</th>
                            </thead>
                            <tbody class="cuerpo">
                                <?php $resultado = mysqli_query($conexion, $consulta);
                                while($row = mysqli_fetch_assoc($resultado)){ ?>
                                <tr>
                                <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"> </td>
                                <td><input type="text" name="numer" value="<?php echo $row['numero']; ?>"> </td>
                                <td><input type="text" name="razonsocial" value=" <?php echo $row['R.social']; ?>"> </td>
                                <td><input type="text" name="control" value="<?php echo $row['C.inicial']; ?>"> </td>
                                <td><input type="text" name="firma" value="<?php echo $row['firma']; ?>"> </td>
                                <td><input type="text" name="rubros" value="<?php echo $row['rubros']; ?>"> </td>
                                <td><input type="text" name="fecha" value="<?php echo $row['fecha']; ?>"> </td>
                                <td><input type="text" name="acta" value="<?php echo $row['acta']; ?>"> </td>
                                <td><input type="text" name="patente" value="<?php echo $row['patente']; ?>"> </td>
                                <td><input type="text" name="control2" value="<?php echo $row['control2']; ?>"> </td>
                                <td><input type="submit" value="Actualizar" class="btn"></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!--tabla responsive  -->
                </div><!-- col-sm-12 col-md-12 col-lg-12 -->
            </form>


        </div><!-- el primer div col.... -->
    </div><!-- conteiner -->
</body>
</html>