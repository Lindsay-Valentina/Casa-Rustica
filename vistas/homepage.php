<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage.php</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/estilos.css" type="text/css">

</head>

<body>
    <?php
    session_start();
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Casa Rústica</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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


        <div class="row">
            <div class="col-md-12 title-page">
                <div class="card bg-info text-center text-white">
                    <h4>MÓDULOS</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Bienvenida <?php echo $_SESSION["administrador"]["nombre"];?></h3>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Módulo contable</h5>
                        <p class="card-text">xxx</p>
                        <a href="vista_home_contable.php" class="card-link">Ir al módulo contable</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Módulo de stock</h5>
                        <p class="card-text">xxx</p>
                        <a href="vista_home_stock.php" class="card-link">Ir al stock</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Agenda de proveedores</h5>
                        <p class="card-text">xxx</p>
                        <a href="vista_home_proveedores.php" class="card-link">Ir a proveedores</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>