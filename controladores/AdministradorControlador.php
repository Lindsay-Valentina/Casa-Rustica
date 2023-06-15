<?php

include "../datos/AdministradorDao.php"; 

class AdministradorControlador{
    /* este método del controlador llamado login, lo que hará es empaquetar este administrador-contrasena en un objeto
    llamado Administrador de entidad y lo va a enviar al Adminitrsador Dao para que lo valide */ 
    
    public static function login($email,$contrasena){
        /**La clase que vamos a instanciar aqui es la que esta en el archivo entidades/Administrador.php */
        $object_Administrador = new Administrador(); 
        $object_Administrador->setEmail($email);
        $object_Administrador->setContrasena($contrasena);
        
        return AdministradorDao::login($object_Administrador);
    
    }


    //La funcion getAdministrador lo que hará es retornarnos un objeto
    public static function getAdministrador($email, $contrasena){

        $object_Administrador = new Administrador(); 
        $object_Administrador->setEmail($email);
        $object_Administrador->setContrasena($contrasena);
        
        return AdministradorDao::getAdministrador($object_Administrador);

    }

}

?>