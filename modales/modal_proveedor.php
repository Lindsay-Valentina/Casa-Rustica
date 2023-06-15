<!-- Modal -->

<div class="modal fade" id="modal_proveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_proveedor">Agregar proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- codigo del formulario para agregar un producto a la factura -->
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

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Agregar proveedor</button>
            </div>
        </div>
    </div>
</div>