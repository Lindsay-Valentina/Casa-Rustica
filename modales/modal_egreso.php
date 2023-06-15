<!-- Modal -->
<div class="modal fade" id="modal_egreso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_egreso">Agregar egreso</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <!-- codigo del formulario para agregar un egreso -->
                <form id="agregarEgresoForm" method="POST" action="../controladores/EgresoControlador.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="concepto">Concepto</label>
                        <input type="text" class="form-control" name="concepto" id="concepto" placeholder="" require>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" name="valor" id="valor" placeholder="" require>
                    </div>
                    <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" placeholder="" require>
                    </div>
                    <div class="form-group">
                        <label for="soporte">Soporte</label>
                        <input type="file" class="form-control" name="soporte" id="soporte" placeholder="" require>
                    </div>
                    <div class="form-group">
                        <label for="fecha_registro">Fecha de registro</label>
                        <input type="date" class="form-control" name="fecha_registro" id="fecha_registro" placeholder=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_actualizacion">Fecha de actualización</label>
                        <input type="date" class="form-control" name="fecha_actualizacion" id="fecha_actualizacion" placeholder=""
                            required>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="agregar_egreso">Agregar egreso</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>