<?php

include '../datos/DetalleFacturaDao.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
  // Obtener los datos del formulario detalle factura(agregar producto a factura)
  $id_detalle_factura = isset($_POST['id_detalle_factura']) ? $_POST['id_detalle_factura'] : '';
    $id_producto = isset($_POST['id_producto']) ? $_POST['id_producto'] : '';
    $id_factura = isset($_POST['id_factura']) ? $_POST['id_factura'] : '';
    $nombre_producto = isset($_POST['nombre_producto']) ? $_POST['nombre_producto'] : '';
    $cantidad_producto = isset($_POST['cantidad_producto']) ? $_POST['cantidad_producto'] : '';
    $valor_unit_producto = isset($_POST['valor_unit_producto']) ? $_POST['valor_unit_producto'] : '';
    $total_detalle_factura = isset($_POST['total_detalle_factura']) ? $_POST['total_detalle_factura'] : '';
    $fecha_registro = isset($_POST['fecha_registro']) ? $_POST['fecha_registro'] : '';

  
  // Crear una instancia de detalle_factura y establecer los valores
  $detalleFactura = new detalleFactura();
  $detalleFactura->setId_detalle_factura($id_detalle_factura);
  $detalleFactura->setId_producto($id_producto);
  $detalleFactura->setId_factura($id_factura);
  $detalleFactura->setNombre_producto($nombre_producto);
  $detalleFactura->setCantidad_producto($cantidad_producto);
  $detalleFactura->setValor_unit_producto($valor_unit_producto);
  $detalleFactura->setTotal_detalle_factura($total_detalle_factura);
  $detalleFactura->setFecha_registro($fecha_registro);


  // Insertar el detalleFactura en la base de datos
  if (DetalleFacturaDao::insertarDetalleFactura($detalleFactura)) {
    // el detalle factura se ha insertado correctamente
    echo "Detalle factura agregado exitosamente.";
    header("Location: ../vistas/vista_agregar_factura.php"); // Redireccionar a la vista de agregar factura

  } else {
    // Ocurrió un error al insertar el el detalle factura
    echo "Error al agregar detalle factura";
  }

}

// Obtener la lista de detalle factura
$detalleFacturas = DetalleFacturaDao::listarDetalleFacturas();

// Recorrer los detallefactura y mostrarlos en filas de la tabla

while ($detalleFactura = $detalleFacturas->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $detalleFactura['id_detalle_factura'] . "</td>";
    echo "<td>" . $detalleFactura['id_producto'] . "</td>";
    echo "<td>" . $detalleFactura['id_factura'] . "</td>";
    echo "<td>" . $detalleFactura['nombre_producto'] . "</td>";
    echo "<td>" . $detalleFactura['cantidad_producto'] . "</td>";
    echo "<td>" . $detalleFactura['valor_unit_producto'] . "</td>";
    echo "<td>" . $detalleFactura['total_detalle_factura'] . "</td>";    
    echo "<td>" . $detalleFactura['fecha_registro'] . "</td>";    
    echo "</tr>";

    
}


?>
