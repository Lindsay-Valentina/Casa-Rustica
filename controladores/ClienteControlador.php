<?php

include_once ('../datos/ClienteDao.php');


$clientes = ClienteDao::getClientes();

foreach ($clientes as $cliente):
 
  echo '<option value="'.$cliente['id_cliente'].'">'. $cliente["tipo_documento"].'-'. $cliente["identificacion_cliente"].' 
  '. $cliente["nombre_cliente"].' '. $cliente["apellido_cliente"].'</option>';
   
  endforeach;


?>
