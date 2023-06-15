<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="col-md-12 form-login">
                    <div class="card bg-info text-center text-white">
                        <h4>Iniciar sesión</h4>
                    </div>
                </div>

                <?php 
                include "../controladores/AdministradorControlador.php";
                include "../helps/helps.php";

                if (isset($mensaje_error)) { ?>
                <div style="color: red;"><?php echo $mensaje_error; ?></div> <?php } ?>

                <div class="col-md-12 form-login">
                    <form action="validarLogin.php" method="POST">
                        <!--codigo php que incluye los controladores-->
                        <div style="margin-top: 5px;">

                        </div>


                        <div class="form-group-login">
                            <label for="email">Correo electrónico</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                                autofocus require>
                        </div>
                        <div class="form-group-login">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" id="contrasena"
                                placeholder="***" require>
                        </div>

                        <div class="btn-login">
                            <button type="submit" class="btn btn-success" name="btningresar"
                                value="btningresar">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>











        <script src="js/bootstrap.min.js"></script>
</body>

</html>