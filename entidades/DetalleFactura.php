<?php

class detalleFactura
{
    private $id_detalle_factura;
    private $id_producto;
    private $id_factura;
	private $nombre_producto; 
    private $cantidad_producto;
	private $valor_unit_producto;
    private $total_detalle_factura;
	private $fecha_registro;
 
	public function getId_detalle_factura(){
		return $this->id_detalle_factura;
	}

	public function setId_detalle_factura($id_detalle_factura){
		$this->id_detalle_factura = $id_detalle_factura;
	}

	public function getId_producto(){
		return $this->id_producto;
	}

	public function setId_producto($id_producto){
		$this->id_producto = $id_producto;
	}

	public function getId_factura(){
		return $this->id_factura;
	}

	public function setId_factura($id_factura){
		$this->id_factura = $id_factura;
	}

	public function getNombre_producto(){
		return $this->nombre_producto;
	}

	public function setNombre_producto($nombre_producto){
		$this->nombre_producto = $nombre_producto;
	}

	public function getCantidad_producto(){
		return $this->cantidad_producto;
	}

	public function setCantidad_producto($cantidad_producto){
		$this->cantidad_producto = $cantidad_producto;
	}

	public function getValor_unit_producto(){
		return $this->valor_unit_producto;
	}

	public function setValor_unit_producto($valor_unit_producto){
		$this->valor_unit_producto = $valor_unit_producto;
	}

	public function getTotal_detalle_factura(){
		return $this->total_detalle_factura;
	}

	public function setTotal_detalle_factura($total_detalle_factura){
		$this->total_detalle_factura = $total_detalle_factura;
	}

	public function getFecha_registro(){
		return $this->fecha_registro;
	}

	public function setFecha_registro($fecha_registro){
		$this->fecha_registro = $fecha_registro;
	}
    
}

?>