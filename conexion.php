<?php
/** Conexion a la db y en el return retorna una conexion en todo momento, es decir, retorna PDO */
class Conexion
{

public static function conectar()
{
    try {

        $conexion = new PDO("mysql:host=localhost;dbname=app_casa_rustica", "root", ""); 
        return $conexion; 
    }

    catch(PDOException $error){
        die($error->getMessage());
    }

}

}


?>