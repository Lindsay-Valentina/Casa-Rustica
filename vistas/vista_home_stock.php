<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo stock</title>
    <link rel="stylesheet" href="../estilos/home_stock.css" type="text/css">
    <link rel="stylesheet" href="../estilos/modal_stock.css" type="text/css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar">
                    <div class="navbar-links">
                        <a class="navbar-link" href="index.php">Módulo contable</a>
                        <a class="navbar-link" href="acerca.php">Agenda proveedores</a>
                        <a class="navbar-link" href="catalogo.php">Perfil</a>
                        <a class="navbar-link" href="catalogo.php">Cerrar sesión</a>
                    </div>
                    <div class="navbar-logo">
                        <img src="../multimedia/logo.png" alt="Logo">
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card bg-info text-center text-white" style="margin-top: 10px;">
                    <h4>PRODUCTOS EN STOCK</h4>
                </div>
            </div>
        </div>

        <!-- codigo boton html -->
        <div class="row">
            <div class="col-md-12 align-right">
                <a href="#" class="agregar_producto">Agregar producto</a>
            </div>
        </div>

        <!-- Modal -->
        <section class="modal modal--show">
            <div class="modal-form-container">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregar_producto">Agregar producto</h5>
                    <a href="#" class="modal_close">X</a>
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
                            <input type="text" class="form-control" name="referencia" id="referencia" placeholder=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="num_unidades">Número unidades</label>
                            <input type="text" class="form-control" name="num_unidades" id="num_unidades" placeholder=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="valor_unidad">Valor unidad</label>
                            <input type="text" step="any" class="form-control" name="valor_unidad" id="valor_unidad"
                                placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="valor_total_productos">Valor total productos</label>
                            <input type="text" step="any" class="form-control" name="valor_total_productos"
                                id="valor_total_productos" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="link_imagen">Imagen</label>
                            <input type="file" class="form-control" name="link_imagen" id="link_imagen" placeholder=""
                                required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" name="agregar_producto">Agregar
                                producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="search">
            <div class="row">
                <div class="col-md-12 search">
                    <a class="navbar-brand">Buscar producto</a>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-md-12">
                <table class="table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Referencia </th>
                            <th scope="col">Descripción</th>
                            <th scope="col">No. unidades</th>
                            <th scope="col">Valor unidad</th>
                            <th scope="col">Valor total</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Fecha registro</th>
                        </tr>
                    </thead>
                    <?php
                    include '../controladores/ProductoControlador.php';
                    ?>

                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

        <script src="../js/modal_producto_stock.js"></script>
</body>

</html>