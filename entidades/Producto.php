<?php

class Producto
{
    private $id_producto;
    private $nombre;
    private $referencia;
    private $descripcion;
    private $num_unidades;
    private $valor_unidad;
    private $valor_total_productos;
    private $link_imagen;
    private $fecha_registro;
    private $fecha_actualizacion;

    public function getId_producto(){
		return $this->id_producto;
	}

	public function setId_producto($id_producto){
		$this->id_producto = $id_producto;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getReferencia(){
		return $this->referencia;
	}

	public function setReferencia($referencia){
		$this->referencia = $referencia;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getNum_unidades(){
		return $this->num_unidades;
	}

	public function setNum_unidades($num_unidades){
		$this->num_unidades = $num_unidades;
	}

	public function getValor_unidad(){
		return $this->valor_unidad;
	}

	public function setValor_unidad($valor_unidad){
		$this->valor_unidad = $valor_unidad;
	}

	public function getValor_total_productos(){
		return $this->valor_total_productos;
	}

	public function setValor_total_productos($valor_total_productos){
		$this->valor_total_productos = $valor_total_productos;
	}

	public function getLink_imagen(){
		return $this->link_imagen;
	}

	public function setLink_imagen($link_imagen){
		$this->link_imagen = $link_imagen;
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


?>