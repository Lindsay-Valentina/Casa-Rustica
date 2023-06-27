<!-- Modal -->


<div class="modal fade" id="modal_detalle_factura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_detalle_factura">Agregar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <!-- codigo del formulario para agregar un producto a la factura -->
                <form id="agregarProductoFacturaForm" method="POST"
                    action="../controladores/Detalle_FacturaControlador.php" enctype="multipart/form-data">

                    <div class="form-group align-left-m10 ">
                        <label for="producto">Producto</label>
                        <?php include '../datos/ProductoDao.php'; ?>
                    </div>
                    <div class="form-group align-left-m10 ">
                        <select class="form-select" aria-label="Default select example">
                            <option value="0">lista de productos en stock:</option>
                            <?php ProductoDao::listarProductosFactura(); ?>
                        </select>
                    </div>
                    <div class="form-group align-left-m10 ">
                        <label for="email">Cantidad</label>
                        <input type="text" class="form-control" name="concepto" id="concepto" placeholder="" require>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn  btn-add" name="agregar_producto">Agregar producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>