<?php
error_reporting(0);
include 'php/cn.php';/* conecta con la base de datos */
include 'php/sesion.php';
include 'php/fecha.php';



$where = '';/* se va a usar para buscar el numero de habilitacion en la base de datos */
if (!empty($_GET['buscar'])) {
    $valor = $_GET['buscar'];
    $where = "WHERE numero LIKE '$valor'"; //busca el numero de habilitacion q pusimos en buscar
}
$consulta = "SELECT * FROM hoja4 $where";/* seleciona de la base de datos utilizando el buscador */
$resultado = mysqli_query($conexion, $consulta);




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="stilos/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Registro de habilitación</title>
</head>

<body>

    <nav>
        <div class="cont--nav">

            <a class="navbar-brand" href="registro.php">Registar inspector</a>
            <a class="navbar-brand" href="php/excel.php">Descargar excel</a>
            <button style="border: none" class="salir btn btn-danger" onclick="alerta('¿Está seguro que desea cerrar sesión?', 'php/logout.php')">Salir</button>

            <div class="cont-fecha"><?php echo "<p class='fecha'>" . $date . "</p>"; ?></div>
        </div>
    </nav><!-- fin del nav -->


    <div class="conteiner cont-prin">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h4 class="text-center titulo">Carga de habilitaciones</h4>
        </div><!-- div tit -->
        <br>
        <form action="php/conectarhab.php" method="post" class="input">
            <div class="cont--form">
                <div class="columna-1 input">
                    <input type="text" name="numero" class="form-control input" placeholder="Habilitacion">
                </div>
                <div class="columna-2 input">
                    <input type="chexbox" name="control0" class="form-control input" placeholder="Citación a control">
                </div>
                <div class="columna-3 input">
                    <input type="text" name="razonsocial" class="form-control input" placeholder="Razón social">
                </div>
                <div class="columna-4 input">
                    <input type="text" name="firma" class="form-control input" placeholder="Firma">
                </div>

                <div class="columna-5 input">
                    <input type="date" name="fecha" class="form-control input">
                </div>
                <div class="columna-6 input">
                    <input type="text" name="patente" class="form-control input" placeholder="Patente">
                </div>
                <div class="columna-7 input">
                    <input type="text" name="acta" class="form-control input" placeholder="Acta">
                </div>
                <div class="columna-9 input">
                    <input type="text" name="control2" class="form-control input" placeholder="Control de frio">
                </div>
                <div class="columna-10 input">
                    <select name="rubro" id="" class="rubros">
                        <option value="Aceite">Aceite</option>
                        <option value="Articulos de limpieza">Articulos de limpieza</option>
                        <option value="Bebidas envasadas">Bebidas envasadas</option>
                        <option value="Carne">Carne</option>
                        <option value="Pollos envasados">Pollos envasados</option>
                        <option value="Cereal">Careal a granel</option>
                        <option value="chacinados">Chacinados</option>
                        <option value="Congelados, Refrigerados, No perecederos, Queso y Fiambres envasados">Congelados, Refrigerados, No perecederos, Queso y Fiambres envasados</option>
                        <option value="Congelados; Refrigerados; No perecederos; Bebidas envasadas; Fletes ">Congelados; Refrigerados; No perecederos; Bebidas envasadas; Fletes </option>
                        <option value="Farinaceos refrigerados">Farinaceos refrigerados</option>
                        <option value="Frutas">Frutas</option>
                        <option value="Helados">Helados</option>
                        <option value="Hielo">Hielo</option>
                        <option value="Huevos envasados">Huevos envasados</option>
                        <option value="Lacteos y derivados; Quesos y fiambres; No perecederos">Lacteos y derivados; Quesos y fiambres; No perecederos</option>
                        <option value="Medicamentos">Medicamentos</option>
                        <option value="Menudencias">Menudencias</option>
                        <option value="Modulo carnico">Modulo carnico</option>
                        <option value="Modulo gastrónomico">Modulo gastrónomico</option>
                        <option value="No perecederos; Bebidas envasadas; Fletes ">No perecederos; Bebidas envasadas; Fletes </option>
                        <option value="Pan y facturas">Pan y facturas</option>
                        <option value="Panificados envasados">Panificados envasados</option>
                        <option value="Papas y verduras procesadas, Frutas procesadas envasadas refrigeradas">Papas y verduras procesadas, Frutas procesadas envasadas refrigeradas</option>
                        <option value="Pastas frescas">Pastas frescas</option>
                        <option value="Pescados">Pescado fresco</option>
                        <option value="pochoclero">Pochoclero</option>
                        <option value="Refrigerados; No perecederos; Bebidas envasadas; Fletes ">Refrigerados; No perecederos; Bebidas envasadas; Fletes </option>
                        <option value="Tapas de empanadas">Tapas de empanadas</option>
                        <option value="Viandas refrigeradas/ Comidas elaboradas">Viandas refrigeradas/ Comidas elaboradas</option>
                        <option value="Transporte escolar">Transporte escolar</option>
                    </select>
                </div>
                <input type="submit" value="Cargar" name="cargar" class="btn-block btn-sm btn-success">
            </div><!-- fin div cont fomr -->

            <?php
            include 'php/alertas.php';
            ?>
        </form>

        <br>
        <div class="conteiner contenedor">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h4 class="text-center titulo">Busqueda de registro</h4>
            </div>
            <br>
            <div class="col-sm-12 col-md-12 col-lg-12 contenedor">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="">
                    <!-- para la busqueda se usa el SERVER -->
                    <input type="text" name="buscar" class="form-control input" placeholder="Busqueda por numero de habilitacion"><br>
                    <input type="submit" value="Buscar" name="" class="btn-block btn-sm btn-success input">
                </form>
                <br>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <?php if ($resultado->num_rows > 0) { ?>
                        <!-- Para validar q se encontro alguna fila en la busqueda -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-muted">
                                    <th>Numero de habilitacion</th>
                                    <th>Razon social</th>
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
                                    <?php while ($row = mysqli_fetch_array($resultado)) {
                                        /*  include 'php/modal_editar.php';  */ ?>
                                        <!-- asociar las filas de la base de datos con la tabla q sea crea aca -->
                                        <tr>
                                            <td><?php echo $row['numero']; ?></td>
                                            <td><?php echo $row['R.social']; ?></td>
                                            <td><?php echo $row['C.inicial']; ?></td>
                                            <td><?php echo $row['firma']; ?></td>
                                            <td><?php echo $row['rubros']; ?></td>
                                            <td><?php echo $row['fecha']; ?></td>
                                            <td><?php echo $row['acta']; ?></td>
                                            <td><?php echo $row['patente']; ?></td>
                                            <td><?php echo $row['control2']; ?></td>
                                            <td>

                                                <!--  <button type="button" data-toggle="modal" style="border: none" data-target="#modal_editar<?php echo $fila['id'];  ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" style="color: #15832e" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </button> -->
                                                <a href="actualizar.php?id=<?php echo $row['id']; ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" style="color: #15832e" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>
                                                <button style="border: none" style="color: white" onclick="alerta('¿Está seguro que desea eliminar los datos?', 'php/eliminar.php?id=<?php echo $row['id']; ?>')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" style="color: #b80808" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <!-- si la busqueda no da resultados -->
                            <div class="text-danger text-center">
                                <p>No se encontraron datos en la consulta</p>
                            </div>
                        <?php } ?>
                        </div> <!-- fin tabla resp -->
                </div><!-- fin col.... -->
                <br>
                <br>
            </div><!-- fin contenedor -->
        </div><!-- fin conteiner -->
    </div><!-- fin contenedor global -->
    <script src="script/screemHab.js"></script>
    <script src="script/modal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>