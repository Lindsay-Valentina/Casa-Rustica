<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar egreso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- codigo del formulario para agregar un producto a la factura -->
                <div class="form-group">
                    <label for="concepto">Concepto</label>
                    <input type="text" class="form-control" name="concepto" id="concepto" placeholder="" require>
                </div>
                <div class="form-group">
                    <label for="valor_egreso">Valor</label>
                    <input type="text" class="form-control" name="valor_egreso" id="valor_egreso" placeholder="" require>
                </div>
                <div class="form-group">
                    <label for="fecha_egreso">fecha</label>
                    <input type="text" class="form-control" name="fecha_egreso" id="fecha_egreso" placeholder="" require>
                </div>
                <div class="form-group">
                    <label for="soporte_egreso">Soporte</label>
                    <input type="text" class="form-control" name="soporte_egreso" id="soporte_egreso" placeholder="" require>
                </div>
                


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>