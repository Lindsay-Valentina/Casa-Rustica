<?php

include '../datos/EgresoDao.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
  // Obtener los datos del formulario
  $concepto = $_POST['concepto'];
  $fecha = $_POST['fecha'];
  $valor = $_POST['valor'];
  $soporte = $_POST['soporte'];
  $fecha_registro = $_POST['fecha_registro'];
  $fecha_actualizacion = $_POST['fecha_actualizacion']; 
   

  // Crear una instancia de Egreso y establecer los valores
  $egreso = new Egreso();
  $egreso->setConcepto($concepto);
  $egreso->setFecha($fecha);
  $egreso->setValor($valor);
  $egreso->setSoporte($soporte);
  $egreso->setFecha_registro($fecha_registro);
  $egreso->setFecha_actualizacion($fecha_actualizacion);



  // Insertar el ingreso en la base de datos
  if (EgresoDao::insertarEgreso($egreso)) {
    // El egreso se ha insertado correctamente
    echo "Egreso agregado exitosamente.";
    header("Location: ../vistas/vista_egresos_contable.php"); // Redireccionar a la vista de egresos contables

  } else {
    // Ocurrió un error al insertar el egreso
    echo "Error al agregar el egreso.";
  }

}

// Obtener la lista de egresos
$egresos = EgresoDao::listarEgresos();

// Recorrer los egresos y mostrarlos en filas de la tabla
while ($egreso = $egresos->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $egreso['concepto'] . "</td>";
    echo "<td>" . $egreso['fecha'] . "</td>";
    echo "<td>" . $egreso['valor'] . "</td>";
    echo "<td>" . $egreso['soporte'] . "</td>";
    echo "<td>" . $egreso['fecha_registro'] . "</td>";
    echo "<td>" . $egreso['fecha_actualizacion'] . "</td>";
    echo "</tr>";
}


?>
