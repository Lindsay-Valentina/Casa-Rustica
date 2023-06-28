<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar factura</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/estilos.css" type="text/css">
</head>

<body>
    <?php
    session_start();
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="navbar-header">
                <div class="col-md-5 ">
                    <div>
                        <a class="navbar-option" href="vista_home_contable.php">Módulo contable</a>
                        <a class="navbar-option" href="vista_home_stock.php">Módulo de stock</a>
                        <a class="navbar-option" href="vista_home_proveedores.php">Agenda de proveedores</a>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="navbar-logo" style="text-align: left;">
                        <img src="../multimedia/logo.png" alt="Logo">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="bienvenida">
                        <h5> Bienvenida
                            <?php echo $_SESSION["administrador"]["nombre"]; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 title-page">
                    <div class="alert  title-modules">
                        <h4>INGRESAR FACTURA</h4>
                    </div>
                </div>
            </div>

            <div class="row align-right">
                <div class="col-md-12 btn-add-go">
                    <button type="button" class="btn btn-add" name="btningresar" data-bs-toggle="modal"
                        data-bs-target="#modal_detalle_factura">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                        </svg>
                        Agregar producto
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nombre_cliente">Cliente</label>
                        <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" placeholder=""
                            require>
                    </div>
                    <div class="form-group">
                        <label for="metodo_pago">Método de pago</label>
                        <input type="text" class="form-control" name="metodo_pago" id="metodo_pago" placeholder=""
                            require>
                    </div>
                    <div class="form-group">
                        <label for="estado_pago">Estado de pago</label>
                        <input type="text" class="form-control" name="estado_pago" id="estado_pago" placeholder=""
                            require>
                    </div>
                    <div class="form-group">
                        <label for="fecha_venta">Fecha de venta</label>
                        <input type="fecha" class="form-control" name="fecha_venta" id="fecha_venta"
                            placeholder="Fecha en la que se causó la venta" require>
                    </div>
                    <div class="form-group">
                        <label for="producto">Producto</label>
                        <input type="text" class="form-control" name="producto" id=""
                            placeholder="Productos relacionados en la factura" require>
                    </div>
                    <div class="form-group">
                        <label for="total_factura">Total</label>
                        <input type="text" class="form-control" name="total_factura" id="total_factura"
                            placeholder="Valor total factura" require>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 btn-add-go">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn  btn-add" name="agregar_factura">Agregar
                                factura</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead class="thead-brown">
                            <tr>
                                <th scope="col">id_producto</th>
                                <th scope="col">id_factura </th>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Valor_unit_producto</th>
                                <th scope="col">Total detalle_factura</th>
                                <th scope="col">Fecha registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../controladores/Detalle_FacturaControlador.php';
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php //include '../modales/modal_detalle_factura.php';?>

            <!-- Modal detalle Factura -->
            <div class="modal fade" id="modal_detalle_factura" role="dialog" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_detalle_factura">Agregar producto a la factura</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="agregarProductoFacturaForm" method="POST"
                                action="../controladores/Detalle_FacturaControlador.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nombre_producto">Nombre del producto</label>
                                    <input type="text" class="form-control" name="nombre_producto" id="nombre_producto"
                                        placeholder="" require>
                                </div>
                                <div class="form-group">
                                    <label for="cantidad_producto">Cantidad</label>
                                    <input type="number" class="form-control" name="cantidad_producto"
                                        id="cantidad_producto" placeholder="" require>
                                </div>
                                <div class="form-group">
                                    <label for="valor_unit_producto">Precio unitario</label>
                                    <input type="number" class="form-control" name="precio_producto"
                                        id="precio_producto" placeholder="" require>
                                </div>
                                <div class="form-group">
                                    <label for="total_detalle_factura">Total detalle factura</label>
                                    <input type="number" class="form-control" name="total_detalle_factura"
                                        id="total_detalle_factura" placeholder="" require>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn  btn-add" name="agregar_producto">Agregar
                                        detalle factura</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="../js/bootstrap.min.js"></script>
</body>

</html>