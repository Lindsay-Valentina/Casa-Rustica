<?php
$id_usuario = $_POST['']; 
$nombre1 = $_POST['nombre1'];
$apellido1 = $_POST['apellido1'];
$tipo_documento = $_POST['tipo_documento']; 
$identificacion = $_POST['identificacion'];
$email = $_POST['email']; 
$contrasena = $_POST['contrasena']; 
$celular = $_POST['celular'];
$ciudad = $_POST['ciudad']; 
$direccion = $_POST['direccion']; 
$create_at = $_POST['create_at']; 


include "conexion.php"; 





$insertar = "INSERT INTO usuarios (nombre, apellido, tipo_documento, identificacion, email, contrasena, celular, ciudad, direccion, create_at)
VALUES ('','$nombre1', '$apellido1', '$identificacion', '$email', '$contrasena', '$celular', '$ciudad', '$direccion', '$create_at')";

if($conexion -> query($insertar) == true){
    header('location:../index.php');
    }
else{
    header('location: ../vista_registro.php');
    }

    $conexion -> close();

?>
