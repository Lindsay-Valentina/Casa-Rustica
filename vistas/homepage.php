<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage.php</title>
    <link rel="stylesheet" href="../estilos/homepage.css" type="text/css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">



</head>

<body>
    <?php
    session_start();
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar">
                    <div class="navbar-links">
                        <a class="navbar-link" href="index.php">Inicio</a>
                        <a class="navbar-link" href="acerca.php">Acerca de nosotros</a>
                        <a class="navbar-link" href="catalogo.php">Catálogo</a>
                    </div>

                    <div class="bienvenida">
                        <h4><span class="user-icon"></span> Bienvenida
                            <?php echo $_SESSION["administrador"]["nombre"];?></h3>
                    </div>

                    <div class="navbar-logo">
                        <img src="../multimedia/logo.png" alt="Logo">
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
                <div class="contable">
                    <h3>Módulo contable</h3>
                    <a href="vista_home_contable.php">Ir al módulo contable</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stock">
                    <div style="height:120px;">
                        <img style= "height:100%" src="../multimedia/muebles.png" alt="">
                    </div>
                    <div>
                        <h3>Módulo de stock</h3>
                        <a href="vista_home_stock.php">Ir al módulo de stock</a>
                    </div>
                   
                </div>
               
            </div>
            <div class="col-md-4">
                <div class="proveedores">
                    <h3>Agenda de proveedores</h3>
                    <a href="vista_home_proveedores.php">Ir a la agenda de proveedores</a>
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




</body>

</html>