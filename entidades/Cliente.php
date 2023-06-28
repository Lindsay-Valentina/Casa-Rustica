<?php

class Cliente{
    private $id_cliente;
    private $nombre_cliente;
    private $apellido_cliente;
    private $tipo_documento;
    private $identificacion_cliente;
    private $email_cliente;
    private $celular_cliente;
    private $ciudad_cliente;
    private $direccion_cliente;
    private $fecha_registro_cliente;

    
    public function getId_cliente(){
        return $this->id_cliente;
    }

    public function setId_cliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }

    public function getNombre_cliente(){
        return $this->nombre_cliente;
    }

    public function setNombre_cliente($nombre_cliente){
        $this->nombre_cliente = $nombre_cliente;
    }

    public function getApellido_cliente(){
        return $this->apellido_cliente;
    }

    public function setApellido_cliente($apellido_cliente){
        $this->apellido_cliente = $apellido_cliente;
    }

    public function getTipo_documento(){
        return $this->tipo_documento;
    }

    public function setTipo_documento($tipo_documento){
        $this->tipo_documento = $tipo_documento;
    }

    public function getIdentificacion_cliente(){
        return $this->identificacion_cliente;
    }

    public function setIdentificacion_cliente($identificacion_cliente){
        $this->identificacion_cliente = $identificacion_cliente;
    }

    public function getEmail_cliente(){
        return $this->email_cliente;
    }

    public function setEmail_cliente($email_cliente){
        $this->email_cliente = $email_cliente;
    }

    public function getCelular_cliente(){
        return $this->celular_cliente;
    }

    public function setCelular_cliente($celular_cliente){
        $this->celular_cliente = $celular_cliente;
    }

    public function getCiudad_cliente(){
        return $this->ciudad_cliente;
    }

    public function setCiudad_cliente($ciudad_cliente){
        $this->ciudad_cliente = $ciudad_cliente;
    }

    public function getDireccion_cliente(){
        return $this->direccion_cliente;
    }

    public function setDireccion_cliente($direccion_cliente){
        $this->direccion_cliente = $direccion_cliente;
    }

    public function getFecha_registro_cliente(){
        return $this->fecha_registro_cliente;
    }

    public function setFecha_registro_cliente($fecha_registro_cliente){
        $this->fecha_registro_cliente = $fecha_registro_cliente;
    }

    
}





?>
