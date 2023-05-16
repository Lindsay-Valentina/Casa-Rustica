<?php
$host_name = 'localhost'; 
$database = 'app_casa_rustica'; 
$user_name = 'root';
$password = '';

$conexion = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_errno($conexion)){
    //echo "error al conectarse";
}
else{
    //echo "Conexión a la base de datos exitosa";
}

$acentos = $conexion -> query("SET NAMES'utf8'");

?>