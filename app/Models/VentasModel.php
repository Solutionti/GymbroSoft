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

}