<?php

include "conexion.php"; 

if(!empty($_POST["btningresar"])){
 
    if (empty($_POST["email"]) and empty($_POST["contrasena"])){
      echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS! CARE XIMBAAAAAAAA</div>';
    }
    else{
        echo "";
        
    }
}


?>