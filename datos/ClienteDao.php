<?php
/*Extends hace que la clase AdministradorDao herede todo lo que tenga la clase Conexion, especialmente la funcion de conectar y vamos a 
poder usar esa conexion internamente dentro de la clase AdministradorDao. Las funciones que vamos a definir internamente son estáticas.
public static function es un método que nos permite conectarnos en todo momento y con getConexion se desciende la conexion, por otro lado
self:: para invocar la clase conexion, en  la linea 15 decimos que la propiedad $conexion que hemos generado con protect static se llene de la conexion. La linea 20 y 21 es para decirle que se cierre esa conexion con PDO */


include '../conexion.php';
include '../entidades/Cliente.php';


class ClienteDao extends Conexion
{
    protected static $conexion;
    //El sgte metodo nos permite conectarnos en todo momento, que nos va a descender la conexion, aqui lo que hacemos es decirle a propiedad conexion generada previamente que se llene de la conexion 
    private static function getConexion()
    {
        if (self::$conexion != null) {
            return self::$conexion;
        }
        self::$conexion = Conexion::conectar(); 
    }
    
  
    //Método que sirve para validar el login, el parámetro que va a recibir es un objeto de tipo administrador y va a retornarnos un booleano 

    public static function getClientes()
    {
        $query = "SELECT * FROM clientes";

        self::getConexion();

        /*Variable que va a recibir el resultado de la query*/
        $resultado = self::$conexion->prepare($query); 
        $resultado->execute(); 
       
        return $resultado;
    }


}

?>