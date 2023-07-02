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

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos del formulario
  $idProveedor = $_POST['id_proveedor'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $nit = $_POST['nit'];
  $ciudad = $_POST['ciudad'];
  $celular = $_POST['celular'];

  // Crear una instancia de Proveedor y establecer los valores
  $proveedor = new Proveedor();
  $proveedor->setIdProveedor($idProveedor);
  $proveedor->setNombre($nombre);
  $proveedor->setApellido($apellido);
  $proveedor->setNit($nit);
  $proveedor->setCiudad($ciudad);
  $proveedor->setCelular($celular);

  // Actualizar el proveedor en la base de datos
  if (ProveedorDao::actualizarProveedor($proveedor)) {
    // El proveedor se ha actualizado correctamente
    echo "Proveedor actualizado exitosamente.";
    header("Location: ../vistas/vista_home_proveedores.php"); // Redireccionar a la vista de proveedores
  } else {
    // Ocurrió un error al actualizar el proveedor
    echo "Error al actualizar el proveedor.";
  }
} else {
  // Verificar si se ha enviado una solicitud GET para editar un proveedor
  if (isset($_GET['id_proveedor'])) {
    $idProveedor = $_GET['id_proveedor'];
    // Obtener los datos del proveedor desde la base de datos
    $proveedor = ProveedorDao::obtenerProveedorPorId($idProveedor);

    // Verificar si se encontró el proveedor
    if ($proveedor) {
      // Incluir el archivo de vista para editar el proveedor
      include '../vistas/vista_editar_proveedor.php';
    } else {
      // Manejar el caso si no se encuentra el proveedor
      echo 'Proveedor no encontrado';
    }
  } else {
    // Código para manejar el caso en que el parámetro 'id_proveedor' no esté definido
    echo 'ID del proveedor no proporcionado';
  }
}



// Eliminar un proveedor
if (isset($_GET['eliminar'])) {
  $id_proveedor = $_GET['eliminar'];
  if (ProveedorDao::eliminarProveedor($id_proveedor)) {
      // El proveedor se ha eliminado correctamente
      echo "Proveedor eliminado exitosamente.";
      header("Location: ../vistas/vista_home_proveedores.php"); // Redireccionar a la vista de proveedores
  } else {
      // Ocurrió un error al eliminar el proveedor
      echo "Error al eliminar el proveedor.";
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
    echo "<td><a href='../vistas/vista_editar_proveedor.php?id_proveedor=" . $proveedor['id_proveedor'] . "'>Editar</a></td>";
    echo "<td><a href='../controladores/ProveedorControlador.php?eliminar=" . $proveedor['id_proveedor'] . "'>Eliminar</a></td>";
    echo "</tr>";
}






?>