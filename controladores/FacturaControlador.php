<?php

include '../datos/FacturaDao.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  
  // Obtener los datos del formulario
  $metodo_pago = $_POST['metodo_pago'];
  $estado_pago = $_POST['estado_pago'];
  $fecha_venta = $_POST['fecha_venta'];
  $fecha_registro = $_POST['fecha_registro'];
   

  // Crear una instancia de Factura y establecer los valores
  $factura = new Factura();
  $factura->setMetodo_pago($concepto);
  $factura->setEstado_pago($fecha);
  $factura->setFecha_venta($valor);
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
    echo "<td>" . $factura['fecha'] . "</td>";
    echo "<td>" . $factura['valor'] . "</td>";
    echo "<td>" . $factura['soporte'] . "</td>";
    echo "<td>" . $factura['fecha_registro'] . "</td>";
    echo "<td>" . $factura['fecha_actualizacion'] . "</td>";
    echo "</tr>";
}


?>
