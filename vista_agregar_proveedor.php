<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar proveedor</title>
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
                                    <a class="nav-link" href="vista_home_contable.php">Módulo contable</a>
                                </li>                                  
                                <li class="nav-item">
                                    <a class="nav-link" href="vista_home_stock.php">Módulo stock</a>
                                </li>    
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_home_proveedores.php">Agenda Proveedores</a>
                                </li>
                                     
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Perfil</a>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_login.php">Cerrar sesión</a>
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
                        <h4>Agregar proveedor</h4>
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
                                    <label for="email">Nombre</label>
                                    <input type="text" class="form-control" name="concepto" id="concepto" placeholder="" require>
                                </div>                               
                                <div class="form-group">
                                    <label for="fecha">Apellido</label>
                                    <input type="fecha" class="form-control" name="fecha" id="contrasena" placeholder="" require>
                                </div>           
                                <div class="form-group">
                                    <label for="fecha">NIT</label>
                                    <input type="fecha" class="form-control" name="fecha" id="contrasena" placeholder="" require>
                                </div>     
                                <div class="form-group">
                                    <label for="fecha">Ciudad</label>
                                    <input type="fecha" class="form-control" name="fecha" id="contrasena" placeholder="" require>
                                </div>        
                                <div class="form-group">
                                    <label for="fecha">Celular</label>
                                    <input type="fecha" class="form-control" name="fecha" id="contrasena" placeholder="" require>
                                </div>         
                                <div class="form-group">
                                    <label for="fecha">Email</label>
                                    <input type="fecha" class="form-control" name="fecha" id="contrasena" placeholder="" require>
                                </div>  
                                <div class="form-group">
                                    <label for="fecha">Material</label>
                                    <input type="fecha" class="form-control" name="fecha" id="contrasena" placeholder="" require>
                                </div> 
              
                            </div>
                    </div>
                    <hr>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success" name="btningresar">Agregar</button>
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