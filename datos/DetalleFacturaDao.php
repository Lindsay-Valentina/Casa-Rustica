<?php

include '../conexion.php';
include '../entidades/DetalleFactura.php';


class DetalleFacturaDao extends Conexion
{
    protected static $conexion;
    //El sgte metodo nos permite conectarnos en todo momento, que nos va a descender la conexion, aqui lo que hacemos es decirle a propiedad conexion generada previamente que se llene de la conexion 
    private static function getConexion()
    {
        self::$conexion = Conexion::conectar(); 
    }
      
    //método que sirve para insertar un detalle de Factura  

   public static function insertarDetalleFactura($detalleFactura)
   {
    $query = "INSERT INTO detalle_factura (id_detalle_factura, id_producto,	id_factura, nombre_producto, cantidad_producto, valor_unit_producto, total_detalle_factura, fecha_registro)
                  VALUES (:id_detalle_factura, :id_producto, :id_factura, :nombre_producto, :cantidad_producto, :valor_unit_producto, :total_detalle_factura,:fecha_registro)";

        self::getConexion();

        $resultado = self::$conexion->prepare($query);

        $id_detalle_factura = $detalleFactura->getId_detalle_factura();
        $id_producto = $detalleFactura->getId_producto();
        $id_factura = $detalleFactura->getId_factura();
        $nombre_producto =$detalleFactura->getNombre_producto(); 
        $cantidad_producto = $detalleFactura->getCantidad_producto();
        $valor_unit_producto =$detalleFactura->getValor_unit_producto();
        $total_detalle_factura = $detalleFactura->getTotal_detalle_factura();
        $fecha_registro = $detalleFactura->getFecha_registro();
        

        $resultado->bindParam(":id_detalle_factura", $id_detalle_factura);
        $resultado->bindParam(":id_producto", $id_producto);
        $resultado->bindParam(":id_factura", $id_factura);
        $resultado->bindParam(":nombre_producto", $nombre_producto);
        $resultado->bindParam(":cantidad_producto", $cantidad_producto);
        $resultado->bindParam(":valor_unit_producto", $valor_unit_producto);
        $resultado->bindParam(":total_detalle_factura", $total_detalle_factura);
        $resultado->bindParam(":fecha_registro", $fecha_registro);

        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function listarDetalleFacturas()
    {
        $query = "SELECT id_detalle_factura, id_producto, id_factura, nombre_producto, cantidad_producto, valor_unit_producto, total_detalle_factura, fecha_registro FROM detalle_factura";
        self::getConexion();
    
        $resultado = self::$conexion->query($query);
        
        return $resultado;
    
    }
}
?>