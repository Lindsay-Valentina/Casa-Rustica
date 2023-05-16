<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


 <?php   
/*Configuración del campo: fecha de creación, tiene que ser creado aquí porque si no, 
no reconoce la variable $fecha_actual. Problema: No se pone la hora de registro sino de cuando se abre el formulario*/

        date_default_timezone_set('America/Bogota');
            $fecha_actual=date("Y-m-d H:i:s");  
?>

</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
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
                                    <a class="nav-link active" aria-current="page" href="vista_login.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Registros</a>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </nav>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-danger text-center text-white">
                  <h3>Formulario de registro</h3>
                </div>
                <form action="controladores/registro.php" method="post">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-sm-12">
                                <hr>
                                <div class="form-group">
                                    <label for="nombre1">Primer nombre</label>
                                    <input type="text" class="form-control" name="nombre1" id="nombre1" placeholder="Primer nombre" require>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="apellido1">Primer apellido</label>
                                    <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="Primer apellido" require>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="tipo_documento">Tipo de documento</label>
                                    <input type="text" class="form-control" name="tipo_documento" id="tipo_documento" placeholder="Tipo de documento" require>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="identificacion">Número de documento</label>
                                    <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="Número de documento" require>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" require>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="contrasena">Contraseña</label>
                                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" require>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control" name="celular" id="celular" placeholder="celular" require>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" require>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" require>
                                </div>
                                <div class="form-group">
                                    <label for="create_at">Fecha de creación</label>
                                    <input type="datetime" class="form-control" name="create_at" id="create_at" value="<?=$fecha_actual?>"  require>
                                </div>
                            </div>                          
                       
                    </div>
                    <hr>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-danger">Registrarse</button>
                    </div>

                </form> 
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>




         




    <script src="js/bootstrap.min.js"></script>
</body>

</html>