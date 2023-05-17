<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand"  href="#">Casa Rústica</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
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
                <div class="card bg-info text-center text-white">
                  <h4>Login</h4>
                </div>
                <form action="controladores/login.php" method="post">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-sm-12">
                                
                                <hr>
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" require>
                                </div>
                               
                                <div class="form-group">
                                    <label for="contrasena">Contraseña</label>
                                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" require>
                                </div>                             
              
                            </div>
                    </div>
                    <hr>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success">Ingresar</button>
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