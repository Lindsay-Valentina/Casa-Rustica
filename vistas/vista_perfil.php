<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
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
                        <a class="navbar-option" href="homepage.php">Inicio</a>
                        <a class="navbar-option" href="vista_home_contable.php">Módulo contable</a>
                        <a class="navbar-option" href="vista_home_stock.php">Módulo de stock</a>
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
                <div class="col-md-12">
                    <div class="alert  title-modules">
                        <h4>Perfil del administrador</h4>
                    </div>
                </div>
            </div>

            <div class="card mb-3 title-modules" style="width: 35rem;">
                <div class="card-body ">
                    <img src="../multimedia/valen.jpeg" class=" profile-image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Valentina Guaba Marulanda</h5>
                        <p class="card-text">Estudiante de Análisis y Desarrollo de Sistemas de Información.
                        </p>
                    </div>
                    <ul class="list-group thead-brown">
                        <li class="list-group-item">Correo electrónico: lindsay-valentina@hotmail.com</li>
                        <li class="list-group-item">Edad: 26 años</li>
                        <li class="list-group-item">Dirección: Carrera 2B este, Tunja, Boyacá.</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://www.linkedin.com/in/lindsay-valentina-guaba-marulanda-aba439196/"
                            class="btn  btn-add">Linkedin</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="footer">
                        <p>Casa rústica</p>
                        <p>Dirección: Cra 2B este, Tunja, Boyacá</p>
                        <p>Celular: 3123115150</p>
                        <p>Copyright 2023 por Valentina</p>
                    </div>
                </div>




            </div>
        </div>
    </div>





    <script src="../js/bootstrap.min.js"></script>
</body>

</html>