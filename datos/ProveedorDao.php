<?php

include '../conexion.php';
include '../entidades/Proveedor.php';


class ProveedorDao extends Conexion
{
    protected static $conexion;
    //El sgte metodo nos permite conectarnos en todo momento, que nos va a descender la conexion, aqui lo que hacemos es decirle a propiedad conexion generada previamente que se llene de la conexion 
    private static function getConexion()
    {
        self::$conexion = Conexion::conectar(); 
    }
      
    //método que sirve para insertar un Proveedor  

   public static function insertarProveedor($proveedor)
   {
    $query = "INSERT INTO proveedores (nombre, apellido, nit, ciudad, celular, email, material)
                  VALUES (:nombre, :apellido, :nit, :ciudad, :celular, :email, :material)";

        self::getConexion();

        $resultado = self::$conexion->prepare($query);

        $nombre = $proveedor->getNombre();
        $apellido = $proveedor->getApellido();
        $nit = $proveedor->getNit();
        $ciudad = $proveedor->getCiudad();
        $celular = $proveedor->getCelular();
        $email = $proveedor->getEmail();
        $material = $proveedor->getMaterial();

        $resultado->bindParam(":nombre", $nombre);
        $resultado->bindParam(":apellido", $apellido);
        $resultado->bindParam(":nit", $nit);
        $resultado->bindParam(":ciudad", $ciudad);
        $resultado->bindParam(":celular", $celular);
        $resultado->bindParam(":email", $email);
        $resultado->bindParam(":material", $material);

        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function listarProveedores()
    {
        $query = "SELECT nombre, apellido, nit, ciudad, celular, email, material FROM proveedores";
        self::getConexion();
    
        $resultado = self::$conexion->query($query);
        
        return $resultado;
    
    }
}
?>