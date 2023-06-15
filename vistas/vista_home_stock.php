<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo stock</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/estilos.css" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">Casa Rústica</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_home_contable.php">Módulo
                                        contable</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vista_home_proveedores.php">Agenda proveedores</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_perfil.php">Perfil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_login.php">Cerrar
                                        sesión</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-info text-center text-white" style="margin-top: 10px;">
                    <h4>PRODUCTOS EN STOCK</h4>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 align-right">
                <!-- codigo boton html -->
                <button type="button" class="btn btn-info btn-add" name="" data-bs-toggle="modal"
                    data-bs-target="#modal_producto_stock">
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
            <div class="col-md-12 search">
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <a class="navbar-brand">Buscar producto</a>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
            </div>
        </div>

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



        <?php include '../modales/modal_producto_stock.php';?>

        <script src="../js/bootstrap.min.js"></script>
</body>

</html>