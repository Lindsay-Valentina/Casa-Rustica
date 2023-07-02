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
        $query = "SELECT id_proveedor, nombre, apellido, nit, ciudad, celular, email, material FROM proveedores";
        self::getConexion();
    
        $resultado = self::$conexion->query($query);
        
        return $resultado;
    
    }

    //Método para actualizar proveedor

    public static function actualizarProveedor($id_proveedor, $nombre, $apellido, $nit, $ciudad, $celular)
{
    $query = "UPDATE proveedores SET nombre = :nombre, apellido = :apellido, nit = :nit, ciudad = :ciudad, celular = :celular WHERE id_proveedor = :id_proveedor";

    self::getConexion();

    $resultado = self::$conexion->prepare($query);
    $resultado->bindParam(":id_proveedor", $id_proveedor);
    $resultado->bindParam(":nombre", $nombre);
    $resultado->bindParam(":apellido", $apellido);
    $resultado->bindParam(":nit", $nit);
    $resultado->bindParam(":ciudad", $ciudad);
    $resultado->bindParam(":celular", $celular);

    if ($resultado->execute()) {
        return true;
    } else {
        return false;
    }
}

public function obtenerProveedorPorId($id_proveedor) {
    $query = "SELECT * FROM proveedores WHERE id_proveedor = :id";
    $statement = $this->conexion->prepare($query);
    $statement->bindParam(':id', $id_proveedor, PDO::PARAM_INT);
    $statement->execute();

    $proveedor = $statement->fetch(PDO::FETCH_ASSOC);

    if ($proveedor) {
        return $proveedor;
    }

    return null; // Si no se encuentra el proveedor, retornar null
}

    

    //Eliminar un proveedor

    public static function eliminarProveedor($idProveedor)
{
    $query = "DELETE FROM proveedores WHERE id_proveedor = :idProveedor";

    self::getConexion();

    $resultado = self::$conexion->prepare($query);
    $resultado->bindParam(":idProveedor", $idProveedor);

    if ($resultado->execute()) {
        return true;
    } else {
        return false;
    }
}


   
}
?>