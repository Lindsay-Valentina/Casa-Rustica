<?php

include "conexion.php"; 

if(!empty($_POST["btningresar"])){
    if (empty($_POST["email"]) and empty($_POST["contrasena"])){
        echo "Los campos están vacíos"; 

    }
    else{
        echo "";

    }
}


?>