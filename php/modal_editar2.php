<?php
  include 'php/sesion.php';
?>

<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form method="POST" action="php/procesar.php">
                                    <input hidden id="hab_id" name="id" value="">
                                    <div class="form-group">
                                        <label for="numero">Numero de habilitación</label>
                                        <input id="hab_num" type="text" class="form-control" name="numero" value=" ">
                                    </div>
                                    <div class="form-group">
                                        <label for="razonsocial">Razón social</label>
                                        <input id="hab_raz" type="text" class="form-control" name="razonsocial" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="control">Control de frío</label>
                                        <input id="hab_control" type="text" class="form-control" name="control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="firma">Firma</label>
                                        <input id="hab_firma" type="text" class="form-control" name="firma" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="rubro">Rubros</label>
                                        <select class="form-control" name="rubro">
                                            <option value="" id="hab_rub"></option>
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
                                        <input id="hab_fecha" type="date" class="form-control" name="fecha" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="acta">Numero de acta</label>
                                        <input id="hab_acta" type="text" class="form-control" name="acta" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="patente">Patente</label>
                                        <input id="hab_pat" type="text" class="form-control" name="patente" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="control2">Segundo control</label>
                                        <input id="hab_cont" type="text" class="form-control" name="control2" value="">
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


