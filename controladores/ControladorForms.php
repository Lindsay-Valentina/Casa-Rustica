<?php 

include_once('../datos/ProductoDao.php') ;
class ControladorForms{

    public static function getProductosFactura(){
        
        $data = ProductoDao::listarProductosFactura()->fetchAll();

        foreach ($data as $valores):
            echo '<option value="' . $valores["id_producto"]. '">' . $valores["nombre"] . ' - Unidades: ' . $valores["num_unidades"] . ' - Valor: ' . $valores["valor_unidad"] . '</option>';
        endforeach;

    }
}

?>