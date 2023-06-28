<?php
include_once('../datos/DetalleFacturaDao.php');
include_once('../datos/ProductoDao.php');

$detalles =  array();
// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_producto = $_POST['producto'];
  $producto = ProductoDao::getProductoId($id_producto)->fetch(PDO::FETCH_OBJ);
  //print_r($producto);

  $cantidad = $_POST['cantidad'];
  $detalle = new DetalleFactura();
  $detalle->setId_producto($producto->id_producto);
  $detalle->setNombre_producto($producto->nombre);
  $detalle->setCantidad_producto($cantidad);
  $detalle->setValor_unit_producto($producto->valor_unidad);
  print_r($detalles);
  
  array_push($detalles, $detalle);
  print_r($detalles);

}

//print_r($detalleFacturas);
if($detalles != null){
  foreach ($detalles as $detalle):
    echo "<tr>";
    echo "<td>" . $detalle->getNombre_producto() . "</td>";
    echo "<td>" . $detalle->getCantidad_producto() . "</td>";
    echo "<td>" . $detalle->getValor_unit_producto() . "</td>";
    echo "<td>" . $detalle->getCantidad_producto() * $detalle->getValor_unit_producto() . "</td>";
    echo "</tr>";
  endforeach;
}


// Recorrer los detallefactura y mostrarlos en filas de la tabla
/**
while ($detalleFactura = $detalleFacturas) {
    echo "<tr>";
    echo "<td>" . $detalleFactura['nombre_producto'] . "</td>";
    echo "<td>" . $detalleFactura['cantidad_producto'] . "</td>";
    echo "<td>" . $detalleFactura['valor_unit_producto'] . "</td>";
    echo "<td>" . $detalleFactura['cantidad_producto'] * $detalleFactura['valor_unit_producto']. "</td>";    
    echo "</tr>";
}
 */



?>