<?php

include '../datos/ProveedorDao.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $nit = $_POST['nit'];
  $ciudad = $_POST['ciudad'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];
  $material = $_POST['material'];

  
  // Crear una instancia de Proveedor y establecer los valores
  $proveedor = new Proveedor();
  $proveedor->setNombre($nombre);
  $proveedor->setApellido($apellido);
  $proveedor->setNit($nit);
  $proveedor->setCiudad($ciudad);
  $proveedor->setCelular($celular);
  $proveedor->setEmail($email);
  $proveedor->setMaterial($material);

  // Insertar el proveedor en la base de datos
  if (ProveedorDao::insertarProveedor($proveedor)) {
    // El proveedor se ha insertado correctamente
    echo "Producto agregado exitosamente.";
    header("Location: ../vistas/vista_home_proveedores.php"); // Redireccionar a la vista de egresos contables

  } else {
    // Ocurrió un error al insertar el producto
    echo "Error al agregar el proveedor.";
  }

}

// Obtener la lista de proveedores
$proveedores = ProveedorDao::listarProveedores();

// Recorrer los proveedores y mostrarlos en filas de la tabla
while ($proveedor = $proveedores->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $proveedor['nombre'] . "</td>";
    echo "<td>" . $proveedor['apellido'] . "</td>";
    echo "<td>" . $proveedor['nit'] . "</td>";
    echo "<td>" . $proveedor['ciudad'] . "</td>";
    echo "<td>" . $proveedor['celular'] . "</td>";
    echo "<td>" . $proveedor['email'] . "</td>";
    echo "<td>" . $proveedor['material'] . "</td>";    
    echo "</tr>";
}


?>
