<?php

include '../datos/Editar_ProveedorDao.php';


// Verificar si se recibió un ID válido del proveedor
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Redireccionar a la página de inicio o mostrar un mensaje de error
    header("Location: ../vistas/vista_home_proveedores.php");
    exit();
}

// Obtener el ID del proveedor desde la URL
$idProveedor = $_GET['id'];


$proveedorDao = new Editar_ProveedorDao();

// Consultar la base de datos para obtener los datos del proveedor
$proveedor = $proveedorDao->obtenerProveedor($idProveedor);

// Verificar si se encontró el proveedor en la base de datos
if (!$proveedor) {
    // Redireccionar a la página de inicio o mostrar un mensaje de error
    header("Location: ../vistas/vista_home_proveedores.php");
    exit();
}

