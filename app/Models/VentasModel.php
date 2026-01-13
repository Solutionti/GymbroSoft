<?php

namespace App\Models;

use CodeIgniter\Model;

class VentasModel extends Model {

  public function getProductos() {
    $productos = $this->db->table("productos")
                    ->select("*")
                    ->get();

     return $productos;               
  }
  public function getproductoventa($codigo) {
    $ventas = $this->db->table("productos")
                    ->select("*")
                    ->where("barras", $codigo)
                    ->orwhere("interno", $codigo)
                    ->get();

     return $ventas->getRow();               
  }

  function getDeportistaId($codigo){
    // Consulta para obtener el deportista por su código
    $deportista = $this->db->table("miembros")
                    ->select("*")
                    ->where("documento", $codigo)
                    ->get();

     return $deportista->getRow(); 
  }

  public function getUltimaVenta() {
    $ultimaVenta = $this->db->table("ventas")
                    ->selectCount('consecutivo', 'consecutivo')
                    ->get();

     return $ultimaVenta->getRow();
  }

  public function registrarVenta($data) {
    $venta = [
      "consecutivo" => $data['consecutivo'],
      "documento" => "FACTURA",
      "fecha" => date('Y-m-d'),
      "hora" => date('H:i'),
      "tipo_pago" => "EFECTIVO",
      "total" => $data['total'],
      "descuento" => 0,
      "cantidad" => count($data['ventas']),
      "caja" => 1,
      "usuario" => session()->get('documento')
    ];

    $this->db->table("ventas")
             ->insert($venta);
  }

  public function descuentoInventario($data) {
    $stock = $this->db->table("productos")
                    ->select("stock")
                    ->where("barras", $data["producto"])
                    ->get();

    $stockAct =  $stock->getRow()->stock - $data["cantidad"];

    $inventario = [
      "stock" => $stockAct
    ];
    $this->db->table("productos")
             ->where("barras", $data["producto"])
             ->update($inventario);
  }

  public function crearPagos($data) {
    $pago = [
      "deportista" => $data["deportista"],
      "fecha_inicio" => $data["fecha_inicio"],
      "fecha_final" => $data["fecha_final"],
      "membresia" => $data["membresia"],
      "total" => $data["total"],
      "estado" => "Pago",
      "fecha" => date('Y-m-d'),
      "usuario" => session()->get('documento')
    ];
    $this->db->table("pagos")
             ->insert($pago);
  }

  public function actualizarDeportista($data) {
    $deportista = [
      "fecha_inicio" => $data["fecha_inicio"],
      "fecha_final" => $data["fecha_final"],
      "membresia" => $data["membresia"]
    ];
    $this->db->table("miembros")
             ->where("documento", $data["deportista"])
             ->update($deportista);
  }

  public function crearDetalleVenta($data) {
    $detalle = [
      "codigo_venta" => $data["codigo_venta"],
      "producto" => $data["producto"],
      "deportista" => $data["deportista"],
      "cantidad" => $data["cantidad"],
      "fecha" => date('Y-m-d'),
      "hora" => date('H:i'),
      "consec_venta" => $data["consec_venta"],
      "valor" => $data["valor"],
      "descontado" => 1,
      "usuario" => session()->get('documento')
    ];
    $this->db->table("detalle_ventas")
             ->insert($detalle);
  }

  public function crearDeportista($data) {
    $deportista = [
      "nombre" => $data["nombre"],
      "apellido" => $data["apellido"],
      "documento" => $data["documento"],
      "telefono" => $data["telefono"],
      "correo" => $data["correo"],
      "sexo" => $data["sexo"],
      "fecha_inicio" => "",
      "fecha_final" => "",
      "membresia" => "",
      "estado" => "Activo",
      "usuario" => session()->get('documento'),
      "fecha" => date('Y-m-d')
    ];
    $this->db->table("miembros")
             ->insert($deportista);
  }

}