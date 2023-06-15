<?php

include "../controladores/AdministradorControlador.php";
include "../helps/helps.php";


session_start(); 

header('Content-type: application/json'); 
$resultado = array();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["email"]) && isset($_POST["contrasena"])) {

        
        $email = validar_campo($_POST["email"]);
        $contrasena = validar_campo($_POST["contrasena"]);

    
        $resultado = array("estado"=>"true");
        
    
        if (AdministradorControlador::login($email, $contrasena)) {
                               
            $administrador = AdministradorControlador::getAdministrador($email, $contrasena);
           //Aqui vamos a crear la sesión
            $_SESSION["administrador"] = array(
                "id_admin"         => $administrador->getId_admin(), 
                "administrador"    => $administrador->getAdministrador(),
                "nombre"           => $administrador->getNombre(),
                "apellido"         => $administrador->getApellido(),
                "email"            => $administrador->getEmail(),
                          
            );
            
          //  return print(json_encode($resultado));
            header("Location: homepage.php");
            exit();
        } 
      }        
    }
    
   // Credenciales incorrectas, mostrar mensaje de error
            $mensaje_error = "Credenciales incorrectas. Acceso denegado.";
            echo '<div style="color: red;">' . $mensaje_error . '</div>';


header("Location: vista_login.php");
/*$mensaje_error = "Credenciales incorrectas. Acceso denegado.";?>
<div style="color: red;"><?php echo $mensaje_error; ?></div>

<?php


//echo 'Acceso denegado';;
//$resultado = array("estado" =>"false"); 
//return print(json_encode($resultado));*/

 
    
     

    

?>