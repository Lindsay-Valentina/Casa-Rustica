<?php

class Egreso
{
    private $id_egreso;
    private $concepto;
    private $fecha;
    private $valor;
    private $soporte;
    private $fecha_registro;
    private $fecha_actualizacion;
    
    public function getId_egreso(){
		return $this->id_egreso;
	}

	public function setId_egreso($id_egreso){
		$this->id_egreso = $id_egreso;
	}

	public function getConcepto(){
		return $this->concepto;
	}

	public function setConcepto($concepto){
		$this->concepto = $concepto;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getSoporte(){
		return $this->soporte;
	}

	public function setSoporte($soporte){
		$this->soporte = $soporte;
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