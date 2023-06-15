<?php

include '../datos/ProductoDao.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $referencia = $_POST['referencia'];
  $descripcion = $_POST['descripcion'];
  $num_unidades = $_POST['num_unidades'];
  $valor_unidad = $_POST['valor_unidad'];
  $valor_total_productos = $_POST['valor_total_productos'];
  $link_imagen = $_FILES['link_imagen'];

  // Ruta donde deseo almacenar el archivo cargado
      $directorio_destino = '../productos_img/';

// Mueve el archivo cargado a la ubicación deseada
if (move_uploaded_file($_FILES['link_imagen']['tmp_name'], $directorio_destino)) {

     echo 'El archivo se ha movido correctamente';

  // Crear una instancia de Producto y establecer los valores
  $producto = new Producto();
  $producto->setNombre($nombre);
  $producto->setReferencia($referencia);
  $producto->setDescripcion($descripcion);
  $producto->setNum_unidades($num_unidades);
  $producto->setValor_unidad($valor_unidad);
  $producto->setValor_total_productos($valor_total_productos);
  $producto->setLink_imagen($link_imagen);

  // Insertar el producto en la base de datos
  if (ProductoDao::insertarProducto($producto)) {
    // El producto se ha insertado correctamente
    echo "Producto agregado exitosamente.";
  } else {
    // Ocurrió un error al insertar el producto
    echo "Error al agregar el producto.";
  }
} else{
  // Ocurrió un error al mover el archivo
  echo "Error al cargar la imagen.";
}
}

// Obtener la lista de productos
$productos = ProductoDao::listarProductos();

// Recorrer los productos y mostrarlos en filas de la tabla
while ($producto = $productos->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $producto['nombre'] . "</td>";
    echo "<td>" . $producto['referencia'] . "</td>";
    echo "<td>" . $producto['descripcion'] . "</td>";
    echo "<td>" . $producto['num_unidades'] . "</td>";
    echo "<td>" . $producto['valor_unidad'] . "</td>";
    echo "<td>" . $producto['valor_total_productos'] . "</td>";
    echo "<td><img src='" . $producto['link_imagen'] . "' alt='Imagen' style='width: 50px;'></td>";

    echo "<td>" . $producto['fecha_registro'] . "</td>";
    echo "</tr>";
}


?>
