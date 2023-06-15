<?php

class Administrador
{

    private $id_admin;
    private $administrador;
    private $nombre;
    private $apellido;
    private $identificacion;
    private $email;
    private $contrasena;
    private $celular;
    private $ciudad;
    private $sueldo;
    private $fecha_registro;
    private $fecha_actualizacion; 

    public function getId_admin(){
		return $this->id_admin;
	}

	public function setId_admin($id_admin){
		$this->id_admin = $id_admin;
	}

	public function getAdministrador(){
		return $this->administrador;
	}

	public function setAdministrador($administrador){
		$this->administrador = $administrador;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getIdentificacion(){
		return $this->identificacion;
	}

	public function setIdentificacion($identificacion){
		$this->identificacion = $identificacion;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getContrasena(){
		return $this->contrasena;
	}

	public function setContrasena($contrasena){
		$this->contrasena = $contrasena;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getCiudad(){
		return $this->ciudad;
	}

	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}

	public function getSueldo(){
		return $this->sueldo;
	}

	public function setSueldo($sueldo){
		$this->sueldo = $sueldo;
	}

	public function getFecha_registro(){
		return $this->fecha_registro;
	}

	public function setFecha_registro($fecha_registro){
		$this->fecha_registro = $fecha_registro;
	}

	public function getFecha_actualizacion(){
		return $this->fecha_actualizacion;
	}

	public function setFecha_actualizacion($fecha_actualizacion){
		$this->fecha_actualizacion = $fecha_actualizacion;
	}
        
}

/*Este código muestra una implementación de dos métodos de una clase en un lenguaje de programación
 orientado a objetos. Los métodos se llaman getId_admin y setId_admin y están relacionados con una propiedad
 llamada id_admin de un objeto.*/


?>