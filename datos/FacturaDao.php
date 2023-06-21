<?php

include '../conexion.php';
include '../entidades/Factura.php';


class FacturaDao extends Conexion
{
    protected static $conexion;
    //El sgte metodo nos permite conectarnos en todo momento, que nos va a descender la conexion, aqui lo que hacemos es decirle a propiedad conexion generada previamente que se llene de la conexion 
    private static function getConexion()
    {
        self::$conexion = Conexion::conectar(); 
    }
      
    //método que sirve para insertar una Factura  

   public static function insertarFactura($factura)
   {
    $query = "INSERT INTO facturas (id_factura,	id_cliente,	id_tienda, metodo_pago,	estado_pago, total_factura,	fecha_venta, fecha_registro)
                  VALUES (:id_factura, :id_cliente, :id_tienda, :metodo_pago, :estado_pago, :total_factura, :fecha_venta, :fecha_registro)";

        self::getConexion();

        $resultado = self::$conexion->prepare($query);

        $id_factura = $factura->getid_factura();
        $id_cliente = $factura->getId_cliente();
        $id_tienda = $factura->getId_tienda();
        $metodo_pago = $factura->getMetodo_pago();
        $estado_pago = $factura->getEstado_pago();
        $total_factura = $factura->getTotal_factura();
        $fecha_venta = $factura->getFecha_venta();
        $fecha_registro =$factura->getFecha_registro(); 

        $resultado->bindParam(":id_factura", $id_factura);
        $resultado->bindParam(":id_cliente", $id_cliente);
        $resultado->bindParam(":id_tienda", $id_tienda);
        $resultado->bindParam(":metodo_pago", $metodo_pago);
        $resultado->bindParam(":estado_pago", $estado_pago);
        $resultado->bindParam(":total_factura", $total_factura);
        $resultado->bindParam(":fecha_venta", $fecha_venta);
        $resultado->bindParam(":fecha_registro", $fecha_registro);

        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function listarFacturas()
    {
        $query = "SELECT id_factura, id_cliente, id_tienda, metodo_pago, estado_pago, total_factura, fecha_venta, fecha_registro FROM facturas";
        self::getConexion();
    
        $resultado = self::$conexion->query($query);
        
        return $resultado;
    
    }
}
?>