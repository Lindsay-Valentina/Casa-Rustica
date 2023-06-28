<?php
/*Extends hace que la clase ProductoDao herede todo lo que tenga la clase Conexion, especialmente la funcion de conectar y vamos a 
poder usar esa conexion internamente dentro de la clase ProductoDao. Las funciones que vamos a definir internamente son estáticas.
public static function es un método que nos permite conectarnos en todo momento y con getConexion se desciende la conexion, por otro lado
self:: para invocar la clase conexion, en  la linea 15 decimos que la propiedad $conexion que hemos generado con protect static se llene de la conexion. La linea 20 y 21 es para decirle que se cierre esa conexion con PDO */


include_once ('../conexion.php') ;
include '../entidades/Producto.php';


class ProductoDao extends Conexion
{

    protected static $conexion;
    //El sgte metodo nos permite conectarnos en todo momento, que nos va a descender la conexion, aqui lo que hacemos es decirle a propiedad conexion generada previamente que se llene de la conexion 
    private static function getConexion()
    {
        self::$conexion = Conexion::conectar();
    }

    /*método que sirve para insertar un Producto  */

    public static function insertarProducto($producto)
    {
        $query = "INSERT INTO productos (nombre, referencia, descripcion, num_unidades, valor_unidad, valor_total_productos, link_imagen, fecha_registro, fecha_actualizacion)
                  VALUES (:nombre, :referencia, :descripcion, :num_unidades, :valor_unidad, :valor_total_productos, :link_imagen, :fecha_registro, :fecha_actualizacion)";

        self::getConexion();

        $resultado = self::$conexion->prepare($query);

        $nombre = $producto->getNombre();
        $referencia = $producto->getReferencia();
        $descripcion = $producto->getDescripcion();
        $num_unidades = $producto->getNum_unidades();
        $valor_unidad = $producto->getValor_unidad();
        $valor_total_productos = $producto->getValor_total_productos();
        $link_imagen = $producto->getLink_imagen();
        $fecha_registro = $producto->getFecha_registro();
        $fecha_actualizacion = $producto->getFecha_actualizacion();

        $resultado->bindParam(":nombre", $nombre);
        $resultado->bindParam(":referencia", $referencia);
        $resultado->bindParam(":descripcion", $descripcion);
        $resultado->bindParam(":num_unidades", $num_unidades);
        $resultado->bindParam(":valor_unidad", $valor_unidad);
        $resultado->bindParam(":valor_total_productos", $valor_total_productos);
        $resultado->bindParam(":link_imagen", $link_imagen);
        $resultado->bindParam(":fecha_registro", $fecha_registro);
        $resultado->bindParam(":fecha_actualizacion", $fecha_actualizacion);

        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function listarProductos()
    {
        $query = "SELECT nombre, referencia, descripcion, num_unidades, valor_unidad, valor_total_productos, link_imagen, fecha_registro FROM productos";
        self::getConexion();

        $resultado = self::$conexion->query($query);

        return $resultado;

    }



    /*Para el modal de agregar producto a factura */

    public static function listarProductosFactura()
    {
        self::getConexion();

        $query = self::$conexion->prepare("SELECT id_producto, nombre,num_unidades, valor_unidad FROM productos");
        $query->execute();

        return $query;
    }

    
    public static function getProductoId($id)
    {
        self::getConexion();

        $query = self::$conexion->prepare("SELECT id_producto, nombre, num_unidades, valor_unidad FROM productos WHERE id_producto = '$id'");
        $query->execute();

        return $query;
    }
}



?>