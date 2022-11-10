
<div class="modal fade" id="modal_editar<?php echo $fila['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editor habilitaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <div class="container-fluid">

                    <?php

                    include 'php/cn.php';
                    include 'php/sesion.php';
                    

                    $id = $_GET['id'];/* el id se lo damos en habilitaciones.php */
                    $consulta = "SELECT * FROM hoja4 WHERE id = '$id'";/* igual que en la busqueda pero se usa el numero de id para seleccionar los datos especificos */

                    $resultado = mysqli_query($conexion, $consulta);
                    $hab = mysqli_fetch_array($resultado);


                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form method="POST" action="php/procesar.php">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div class="form-group">
                                        <label for="numero">Numero de habilitación</label>
                                        <input type="text" class="form-control" name="numero" value="<?php echo $row['numero']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="razonsocial">Razón social</label>
                                        <input type="text" class="form-control" name="razonsocial" value=" <?php echo $row['R.social']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="control">Control de frío</label>
                                        <input type="text" class="form-control" name="control" value="<?php echo $row['C.inicial']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="firma">Firma</label>
                                        <input type="text" class="form-control" name="firma" value="<?php echo $row['firma']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="rubro">Rubros</label>
                                        <select class="form-control" name="rubro">
                                            <option value="<?php echo $row['rubros']; ?>"><?php echo $row['rubros']; ?></option>
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
                                    <div class="form-group">
                                        <label for="fecha">Fecha de habilitación</label>
                                        <input type="date" class="form-control" name="fecha" value="<?php echo $row['fecha']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="acta">Numero de acta</label>
                                        <input type="text" class="form-control" name="acta" value="<?php echo $row['acta']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="patente">Patente</label>
                                        <input type="text" class="form-control" name="patente" value="<?php echo $row['patente']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="control2">Segundo control</label>
                                        <input type="text" class="form-control" name="control2" value="<?php echo $row['control2']; ?>">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Editar registro</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- fin body -->
        </div>
    </div>
</div>


<div class="modal-footer">

    <!--  <button type="button" class="btn btn-primary">Guardar cambios</button> -->
</div>
</div>
</div>
</div>
