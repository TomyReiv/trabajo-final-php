<?php
    error_reporting(0);
    include 'php/cn.php';/* conecta con la base de datos */
    $where = '';/* se va a usar para buscar el numero de habilitacion en la base de datos */
    if(!empty($_POST)){
        $valor = $_POST['buscar'];
        if(!empty($valor)){
            $where = "WHERE numero LIKE '$valor'"; //busca el numero de habilitacion q pusimos en buscar
        }
    }
    $consulta = "SELECT * FROM hoja4 $where";/* seleciona de la base de datos utilizando el buscador */
    $resultado = $conexion->query($consulta);
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <link rel="stylesheet" href="stilos/style2.css">
    <title>Registro de habilitación</title>
</head>
<body>
<div class="logout">
        <a href="php/logout.php" rel="noopener noreferrer" class="btn-logout">Logout</a>
    </div>
    <div class="conteiner">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h4 class="text-center titulo">Carga de habilitaciones</h4>
        </div><!-- div tit -->
        <br>
        <form action="php/conectarhab.php" method="post">
            <div class="cont--form">
                <div class="columna-1">
                    <input type="text" name="numero" class="form-control" placeholder="Habilitacion">
                </div>
                <div class="columna-2">
                    <input type="chexbox" name="control0" class="form-control" placeholder="Citación a control">
                </div>
                <div class="columna-3">
                    <input type="text" name="razonsocial" class="form-control" placeholder="Razón social">
                </div>
                <div class="columna-4">
                    <input type="text" name="firma" class="form-control" placeholder="Firma">
                </div>
                
                <div class="columna-5">
                    <input type="date" name="fecha" class="form-control">
                </div>
                <div class="columna-6">
                    <input type="text" name="patente" class="form-control" placeholder="Patente">
                </div>
                <div class="columna-7">
                <input type="text" name="acta" class="form-control" placeholder="Acta">
                </div>
                <div class="columna-9">
                    <input type="text" name="control2" class="form-control" placeholder="Control de frio">
                </div>
                <div class="columna-10">
                    <select name="rubro" id="" class="">
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
        </form>
    
        <br>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h4 class="text-center titulo">Busqueda de registro</h4>
        </div>
        <br>
        <div class="col-sm-12 col-md-12 col-lg-12 contenedor">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class=""><!-- para la busqueda se usa el SERVER -->
                <input type="text" name="buscar" class="form-control" placeholder="Busqueda por numero de habilitacion"><br>
                <input type="submit" value="Buscar" name="" class="btn-block btn-sm btn-success">
            </form>
            <br>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <?php if($resultado->num_rows > 0){ ?> <!-- Para validar q se encontro alguna fila en la busqueda -->
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
                            <?php while($row = $resultado->fetch_assoc()){ ?> <!-- asociar las filas de la base de datos con la tabla q sea crea aca -->
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
                            <td><a href="actualizar.php?id=<?php echo $row['id'];?>" target="_blank" rel="noopener noreferrer">Editar</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else{ ?><!-- si la busqueda no da resultados -->
                    <div class="text-danger text-center">
                        <p>No se encontraron datos en la consulta</p>
                    </div>
                    <?php } ?>
                </div> <!-- fin tabla resp -->
            </div><!-- fin col.... -->
       
   
            <br>
        
                <a href="registro.html" target="_blank" rel="noopener noreferrer" class=" btn-block btn-sm btn-success registrar ">Registrar a un nuevo inspector</a>
            
            <br>
                <a href="php/excel.php" target="_blank" rel="noopener noreferrer" class=" btn-block btn-sm btn-success registrar ">Descargar excel</a>
            <br>
        </div><!-- fin contenedor -->
    </div><!-- fin contenedor global -->
</body>
</html>