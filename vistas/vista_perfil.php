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

    <div class="container">
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
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_home_contable.php">Módulo
                                        contable</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="vista_home_stock.php">Módulo
                                        de stock</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vista_home_proveedores.php">Agenda proveedores</a>
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
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-info text-center text-white" style="margin-top: 10px;">
                    <h4>Bienvenida</h4>
                </div>
            </div>
        </div>
        
        
        <div class="card-body">
            <div class="text-center">
              <div class="profile-image"></div>
              <h4>Valentina</h4>
            </div>
            <hr>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" value="" readonly>
            </div>
            <div class="mb-3">
              <label for="celular" class="form-label">Celular:</label>
              <input type="tel" class="form-control" id="celular" value="" readonly>
            </div>
            <div class="mb-3">
              <label for="ciudad" class="form-label">Ciudad:</label>
              <input type="text" class="form-control" id="ciudad" value=" " readonly>
            </div>
          </div>
        </div>
      </div>
    </div>

        



        <script src="../js/bootstrap.min.js"></script>
</body>

</html>