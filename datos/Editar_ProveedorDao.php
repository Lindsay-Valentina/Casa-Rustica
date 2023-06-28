<?php

include '../conexion.php';
include '../entidades/Proveedor.php';



class Editar_ProveedorDao
{
    protected static $conexion;
    //El sgte metodo nos permite conectarnos en todo momento, que nos va a descender la conexion, aqui lo que hacemos es decirle a propiedad conexion generada previamente que se llene de la conexion 
    private static function getConexion()
    {
        self::$conexion = Conexion::conectar(); 
    }

    public function obtenerProveedor($idProveedor)
    {
        $query = "SELECT * FROM proveedores WHERE id_proveedor = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $idProveedor, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarProveedor($idProveedor, $nombre, $apellido, $nit, $ciudad, $celular, $email, $material)
    {
        $query = "UPDATE proveedores SET nombre = :nombre, apellido = :apellido, nit = :nit, ciudad = :ciudad, celular = :celular, email = :email, material = :material WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':nit', $nit, PDO::PARAM_STR);
        $stmt->bindParam(':ciudad', $ciudad, PDO::PARAM_STR);
        $stmt->bindParam(':celular', $celular, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':material', $material, PDO::PARAM_STR);
        $stmt->bindParam(':id', $idProveedor, PDO::PARAM_INT);
        $stmt->execute();
    }
}
?>
