<?php

class Proveedor
{
    private $id_proveedor;
    private $nombre;
    private $apellido;
    private $nit;
    private $ciudad;
    private $celular;
    private $email;
    private $material;

    public function getId_proveedor(){
		return $this->id_proveedor;
	}

	public function setId_proveedor($id_proveedor){
		$this->id_proveedor = $id_proveedor;
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

	public function getNit(){
		return $this->nit;
	}

	public function setNit($nit){
		$this->nit = $nit;
	}

	public function getCiudad(){
		return $this->ciudad;
	}

	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getMaterial(){
		return $this->material;
	}

	public function setMaterial($material){
		$this->material = $material;
	}   
					
}
   
?>