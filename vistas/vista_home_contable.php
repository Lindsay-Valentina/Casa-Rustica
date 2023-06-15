<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo contable</title>
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
                                    <a class="nav-link active" aria-current="page" href="vista_home_stock.php">Módulo
                                        stock</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vista_home_proveedores.php">Agenda Proveedores</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_login.php">Perfil</a>
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
                <div class="card bg-info text-center text-white">
                    <h4>MÓDULO CONTABLE</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total ingresos anuales</h5>
                        <p class="card-text">2'000.000</p>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total egresos anuales</h5>
                        <p class="card-text">2'000.000</p>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total beneficio anual</h5>
                        <p class="card-text">2'000.000</p>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class=row>
            <div class="col-md-12">
                <a href="vista_facturas_contable.php" class="btn btn-info">Facturas</a>
                <a href="vista_egresos_contable.php" class="btn btn-info">Egresos</a>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Año</th>
                                <th scope="col">Mes</th>
                                <th scope="col">Ingresos</th>
                                <th scope="col">Egresos</th>
                                <th scope="col">Beneficio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">2021</th>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>

                            </tr>
                            <tr>
                                <th scope="row">2022</th>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>

                            </tr>
                            <tr>
                                <td>2023</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <script src="js/bootstrap.min.js"></script>
</body>

</html>