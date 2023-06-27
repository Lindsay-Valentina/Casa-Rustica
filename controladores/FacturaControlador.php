<?php

include '../datos/FacturaDao.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  
  // Obtener los datos del formulario
  $id_cliente = $_POST['id_cliente'];
  $metodo_pago = $_POST['metodo_pago'];
  $estado_pago = $_POST['estado_pago'];
  $total_factura = $_POST['total_factura'];
  $fecha_venta = $_POST['fecha_venta'];
  $fecha_registro = $_POST['fecha_registro'];
   

  // Crear una instancia de Factura y establecer los valores
  $factura = new Factura();
  $factura->setId_cliente($id_cliente);
  $factura->setMetodo_pago($metodo_pago);
  $factura->setEstado_pago($estado_pago);
  $factura->setTotal_factura($total_factura);
  $factura->setFecha_venta($fecha_venta);
  $factura->setFecha_registro($fecha_registro);



  // Insertar la factura en la base de datos
  if (FacturaDao::insertarFactura($factura)) {
    // La factura se ha insertado correctamente
    echo "Factura agregada exitosamente.";
    header("Location: ../vistas/vista_facturas_contable.php"); // Redireccionar a la vista de facturas contables

  } else {
    // Ocurrió un error al insertar el egreso
    echo "Error al agregar.";
  }

}

// Obtener la lista de facturas
$facturas = FacturaDao::listarFacturas();

// Recorrer las facturas y mostrarlos en filas de la tabla
while ($factura = $facturas->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $factura['id_factura'] . "</td>";
    echo "<td>" . $factura['metodo_pago'] . "</td>";
    echo "<td>" . $factura['estado_pago'] . "</td>";
    echo "<td>" . $factura['total_factura'] . "</td>";
    echo "<td>" . $factura['fecha_venta'] . "</td>";
    echo "<td>" . $factura['fecha_registro'] . "</td>";
    echo "</tr>";
}


?>
