<?php

$nombre1 = $_POST['nombre1'];
$apellido1 = $_POST['apellido1'];
$tipo_documento = $_POST['tipo_documento']; 
$identificacion = $_POST['identificacion'];
$email = $_POST['email']; 
$contrasena = $_POST['contrasena']; 
$celular = $_POST['celular'];
$ciudad = $_POST['ciudad']; 
$direccion = $_POST['direccion']; 



include "conexion.php"; 

$fecha_actual=date("Y-m-d H:i:s");


$insertar = "INSERT INTO usuarios (nombre, apellido, tipo_documento, identificacion, email, contrasena, celular, ciudad, direccion, create_at)
VALUES ('','$nombre1', '$apellido1', '$identificacion', '$email', '$contrasena', '$celular', '$ciudad', '$direccion', '$fecha_actual')";

if($conexion -> query($insertar) == true){
    header('location:../index.php');
    }
else{
    header('location: ../vista_registro.php');
    }

    $conexion -> close();

?>
