    <!-- Modal -->

    <div class="modal fade" id="modal_proveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_proveedor">Agregar proveedor</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- codigo del formulario para agregar un proveedor -->
                    <form id="agregarProveedorForm" method="POST" action="../controladores/ProveedorControlador.php"
                        enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" require>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="" require>
                        </div>
                        <div class="form-group">
                            <label for="nit">NIT</label>
                            <input type="text" class="form-control" name="nit" id="nit" placeholder="" require>
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="" require>
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" name="celular" id="celular" placeholder="" require>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="" require>
                        </div>
                        <div class="form-group">
                            <label for="material">Material</label>
                            <input type="text" class="form-control" name="material" id="material" placeholder="" require>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" name="agregar_producto">Agregar proveedor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>