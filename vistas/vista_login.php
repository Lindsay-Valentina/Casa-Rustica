<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/estilos.css" type="text/css">
    <link rel="stylesheet" href="../estilos/vista_login.css" type="text/css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="navbar-header">
                <div class="col-md-8 ">
                    <div>
                        <a class="navbar-option" href="index.php">Inicio</a>
                        <a class="navbar-option" href="acerca.php">Acerca de nosotros</a>
                        <a class="navbar-option" href="catalogo.php">Catálogo</a>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="navbar-logo">
                        <img src="../multimedia/logo.png" alt="Logo">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 horizontal-center">
                <div class="title_login ">
                    <h3>Iniciar sesión</h3>
                    <?php
                    include "../controladores/AdministradorControlador.php";
                    include "../helps/helps.php";

                    session_start();

                    if (isset($_SESSION['resultado'])) {
                        $resultado = $_SESSION['resultado'];
                        unset($_SESSION['resultado']);
                    } else {
                        $resultado = "";
                    }
                    ?>

                    <div
                        style="color: red; font-size: 18px; font-weight: normal; text-align: center; border: spx solid #734e3837; background-color: #F2D5DB; border-radius: 3px; margin: 3px">
                        <?php echo $resultado; ?>
                    </div>







                    <div class="col-md-12 form-login">
                        <form action="validarLogin.php" method="POST">
                            <!--codigo php que incluye los controladores-->
                            <div style="margin-top: 5px;">
                            </div>

                            <div class="caja_login">
                                <label for="email">Correo electrónico</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                                    autofocus require>
                            </div>
                            <div class="caja_contra">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" name="contrasena" id="contrasena"
                                    placeholder="***" require>
                            </div>

                            <div class="btn-login">
                                <button type="submit" class="btn btn-add" name="btningresar"
                                    value="btningresar">Ingresar</button>
                            </div>
                        </form>
                    </div>
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


        <script src="js/bootstrap.min.js"></script>
</body>

</html>