<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage.php</title>
    <link rel="stylesheet" href="../estilos/homepage.css" type="text/css">
    <link rel="stylesheet" href="../estilos/estilos.css" type="text/css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">



</head>

<body>
    <?php
    session_start();
    ?>


    <div class="container-fluid">
        <div class="row ">
            <div class="navbar-header">
                <div class="col-md-5 ">
                    <div>
                        <a class="navbar-option" href="index.php">Inicio</a>
                        <a class="navbar-option" href="vista_perfil.php">Perfil</a>
                        <a class="navbar-option" href="vista_login.php">Cerrar sesión</a>
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

        <div class="row">
            <div class="col-md-12 ">
                <div class="title-modulos">
                    <h1>MÓDULOS</h1>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-4">
                <div class="module">
                    <div style="height:120px;">
                        <img style="height:100%" src="../multimedia/contable.png" alt="">
                    </div>
                    <div>
                        <h3>Módulo contable</h3>
                        <a href="vista_home_contable.php">Ir al módulo contable</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="module">
                    <div style="height:120px;">
                        <img style="height:100%" src="../multimedia/muebles.png" alt="">
                    </div>
                    <div>
                        <h3>Módulo de stock</h3>
                        <a href="vista_home_stock.php">Ir al módulo de stock</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="module">
                    <div style="height:120px;">
                        <img style="height:100%" src="../multimedia/cuaderno.png" alt="">
                    </div>
                    <div>
                        <h3>Agenda de proveedores</h3>
                        <a href="vista_home_proveedores.php">Ir a proveedores</a>
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


</body>

</html>