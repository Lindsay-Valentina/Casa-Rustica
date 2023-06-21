<?php

class Factura
{
    private $id_factura;
    private $id_cliente;
    private $id_tienda;
    private $metodo_pago;
    private $estado_pago;
	private $total_factura;
    private $fecha_venta;
    private $fecha_registro;

    public function getId_factura(){
		return $this->id_factura;
	}

	public function setId_factura($id_factura){
		$this->id_factura = $id_factura;
	}

	public function getId_cliente(){
		return $this->id_cliente;
	}

	public function setId_cliente($id_cliente){
		$this->id_cliente = $id_cliente;
	}

	public function getId_tienda(){
		return $this->id_tienda;
	}

	public function setId_tienda($id_tienda){
		$this->id_tienda = $id_tienda;
	}

	public function getMetodo_pago(){
		return $this->metodo_pago;
	}

	public function setMetodo_pago($metodo_pago){
		$this->metodo_pago = $metodo_pago;
	}

	public function getEstado_pago(){
		return $this->estado_pago;
	}

	public function setEstado_pago($estado_pago){
		$this->estado_pago = $estado_pago;
	}

	public function getTotal_factura(){
		return $this->total_factura;
	}

	public function setTotal_factura($total_factura){
		$this->total_factura = $total_factura;
	}

	public function getFecha_venta(){
		return $this->fecha_venta;
	}

	public function setFecha_venta($fecha_venta){
		$this->fecha_venta = $fecha_venta;
	}

	public function getFecha_registro(){
		return $this->fecha_registro;
	}

	public function setFecha_registro($fecha_registro){
		$this->fecha_registro = $fecha_registro;
	}



}

?>