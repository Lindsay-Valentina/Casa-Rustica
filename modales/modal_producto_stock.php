<!-- Modal -->

<div class="modal-form-container">
    <div class="modal-header">
        <h5 class="modal-title" id="modal_producto_stock">Agregar producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">
        <!-- Código del formulario para agregar un producto al stock -->
        <form id="agregarProductoForm" method="POST" action="../controladores/ProductoControlador.php"
            enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="referencia">Referencia</label>
                <input type="text" class="form-control" name="referencia" id="referencia" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="num_unidades">Número unidades</label>
                <input type="text" class="form-control" name="num_unidades" id="num_unidades" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="valor_unidad">Valor unidad</label>
                <input type="text" step="any" class="form-control" name="valor_unidad" id="valor_unidad" placeholder=""
                    required>
            </div>
            <div class="form-group">
                <label for="valor_total_productos">Valor total productos</label>
                <input type="text" step="any" class="form-control" name="valor_total_productos"
                    id="valor_total_productos" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="link_imagen">Imagen</label>
                <input type="file" class="form-control" name="link_imagen" id="link_imagen" placeholder="" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" name="agregar_producto">Agregar producto</button>
            </div>
        </form>
    </div>

