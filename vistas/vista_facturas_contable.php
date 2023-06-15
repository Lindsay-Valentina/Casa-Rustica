<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo contable-facturas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/estilos.css" type="text/css">
</head>

<body>
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
                                <a class="nav-link active" aria-current="page" href="vista_home_stock.php">Módulo
                                    stock</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vista_home_proveedores.php">Agenda Proveedores</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Perfil</a>
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

    <div class="container">
        <div class="row">
            <div class="col-md-12 title-page">
                <div class="card bg-info text-center text-white">
                    <h4>FACTURAS</h4>
                </div>
            </div>
        </div>

          <!-- codigo botones html -->
        <div class="row row-btns">
            <div class="col-md-6 btn-add-go">
            <a class="btn btn-info" href="vista_agregar_factura.php" role="button">Agregar factura</a>
            </div>
            <div class="col-md-6 btn-add-go">
                <a class="btn btn-info" href="vista_egresos_contable.php" role="button">Egresos</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 search">
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <a class="navbar-brand">Buscar factura</a>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id factura</th>
                            <th scope="col">Método de pago</th>
                            <th scope="col">Estado de pago</th>
                            <th scope="col">Total factura</th>
                            <th scope="col">Fecha de venta</th>
                            <th scope="col">Fecha de creación</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        x</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <script src="js/bootstrap.min.js"></script>
</body>

</html>