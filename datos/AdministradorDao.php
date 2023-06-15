<?php
/*Extends hace que la clase AdministradorDao herede todo lo que tenga la clase Conexion, especialmente la funcion de conectar y vamos a 
poder usar esa conexion internamente dentro de la clase AdministradorDao. Las funciones que vamos a definir internamente son estáticas.
public static function es un método que nos permite conectarnos en todo momento y con getConexion se desciende la conexion, por otro lado
self:: para invocar la clase conexion, en  la linea 15 decimos que la propiedad $conexion que hemos generado con protect static se llene de la conexion. La linea 20 y 21 es para decirle que se cierre esa conexion con PDO */


include '../conexion.php';
include '../entidades/Administrador.php';


class AdministradorDao extends Conexion
{
    protected static $conexion;
    //El sgte metodo nos permite conectarnos en todo momento, que nos va a descender la conexion, aqui lo que hacemos es decirle a propiedad conexion generada previamente que se llene de la conexion 
    private static function getConexion()
    {
        self::$conexion = Conexion::conectar(); 
    }
    
  
    //Método que sirve para validar el login, el parámetro que va a recibir es un objeto de tipo administrador y va a retornarnos un booleano 

    public static function login($administrador)
    {
        $query = "SELECT * FROM administrador WHERE email = :email AND contrasena = :contrasena";

        self::getConexion();

        /*Variable que va a recibir el resultado de la query*/
        $resultado = self::$conexion->prepare($query); 

        if (!$resultado) {
            throw new Exception("Error al preparar la consulta"); // Lanza una excepción en caso de error
        }

        $email = $administrador->getEmail();
        $contrasena = $administrador->getContrasena();
   
        $resultado->bindParam(":email", $email, PDO::PARAM_STR);
        $resultado->bindParam(":contrasena", $contrasena, PDO::PARAM_STR);

        $resultado->execute(); 
       
        /*Para contabilizar si este resultado ->execute esta devolviendo objetos. Si tiene resultados retorna true si no, false.*/

        if ($resultado->rowCount() >0) {
            $filas = $resultado->fetch();
            if($filas["email"] == $administrador->getEmail() 
                && $filas["contrasena"] == $administrador->getContrasena()){
                return true;                
            }     
        }

        return false;       
    }

    /*método que sirve para obtener un administrador  */

   public static function getAdministrador($administrador)
   {
       $query = "SELECT  id_admin, administrador, nombre, apellido, email, fecha_registro FROM administrador WHERE email = :email AND contrasena = :contrasena";
   
       self::getConexion(); 

       $resultado = self::$conexion->prepare($query);

       $email = $administrador->getEmail();
       $contrasena = $administrador->getContrasena(); 

       $resultado->bindParam(":email", $email);
       $resultado->bindParam(":contrasena", $contrasena);
       
       $resultado->execute(); 

       $filas = $resultado->fetch();

       $administrador = new Administrador();
       $administrador->setId_admin($filas["id_admin"]);
       $administrador->setAdministrador($filas["administrador"]);
       $administrador->setNombre($filas["nombre"]);
       $administrador->setApellido($filas["apellido"]);
       $administrador->setEmail($filas["email"]);
       $administrador->setFecha_registro($filas["fecha_registro"]);

       return $administrador; 

   }       

    private static function desconectar()
    
    {
        self::$conexion = null; 
    }
}

?>