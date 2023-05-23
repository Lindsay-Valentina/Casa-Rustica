<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar egreso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


 

</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
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
                                    <a class="nav-link active" aria-current="page" href="vista_login.php">Agenda Proveedores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Módulo stock</a>
                                </li>    
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_login.php">Módulo venta online</a>
                                </li>      
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_login.php">Perfil</a>
                                </li>  
                                <li class="nav-item">
                                    <button type="submit" class="btn btn-danger">Cerrar sesión</button> 
                                </li>                   
                            </ul>
                        </div>
                    </div>
                </nav>
                <hr>

                </div>
            </div>
            <div class="col-md-1"></div>
            
        </div>
    </div>
</section>


<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card bg-info text-center text-white">
                        <h4>Agregar egreso</h4>
                    </div>
                    <hr>
                </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="container">
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <hr>
            <div class="form-group">
                                    <label for="email">Concepto</label>
                                    <input type="text" class="form-control" name="concepto" id="concepto" placeholder="Concepto del egreso" require>
                                </div>                               
                                <div class="form-group">
                                    <label for="fecha">Fecha del egreso</label>
                                    <input type="fecha" class="form-control" name="fecha" id="contrasena" placeholder="Fecha en la que se causó el egreso" require>
                                </div>                             
              
                            </div>
                    </div>
                    <hr>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success" name="btningresar">Ingresar</button>
                    </div>
                </form> 
                
<div class="col-md-1"></div>
        </div><
</div>
    </div>
</section>

<script src="js/bootstrap.min.js"></script>
</body>

</html>