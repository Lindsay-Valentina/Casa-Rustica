<?php

include '../conexion.php';
include '../entidades/Egreso.php';


class EgresoDao extends Conexion
{
    protected static $conexion;
    //El sgte metodo nos permite conectarnos en todo momento, que nos va a descender la conexion, aqui lo que hacemos es decirle a propiedad conexion generada previamente que se llene de la conexion 
    private static function getConexion()
    {
        self::$conexion = Conexion::conectar(); 
    }
      
    //método que sirve para insertar un Egreso  

   public static function insertarEgreso($egreso)
   {
    $query = "INSERT INTO egresos (concepto, fecha, valor, soporte, fecha_registro, fecha_actualizacion)
                  VALUES (:concepto, :fecha, :valor, :soporte, :fecha_registro, :fecha_actualizacion)";

        self::getConexion();

        $resultado = self::$conexion->prepare($query);

        $concepto = $egreso->getConcepto();
        $fecha = $egreso->getFecha();
        $valor = $egreso->getValor();
        $soporte = $egreso->getSoporte();
        $fecha_registro = $egreso->getFecha_registro();
        $fecha_actualizacion = $egreso->getFecha_actualizacion();

        $resultado->bindParam(":concepto", $concepto);
        $resultado->bindParam(":fecha", $fecha);
        $resultado->bindParam(":valor", $valor);
        $resultado->bindParam(":soporte", $soporte);
        $resultado->bindParam(":fecha_registro", $fecha_registro);
        $resultado->bindParam(":fecha_actualizacion", $fecha_actualizacion);

        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function listarEgresos()
    {
        $query = "SELECT concepto, fecha, valor, soporte, fecha_registro, fecha_actualizacion FROM egresos";
        self::getConexion();
    
        $resultado = self::$conexion->query($query);
        
        return $resultado;
    
    }
}
?>