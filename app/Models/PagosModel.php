<?php

namespace App\Models;

use CodeIgniter\Model;

class PagosModel extends Model {

    public function getPagos() {
      $pagos = $this->db->table('pagos p')
            ->select('p.*, d.nombre, d.apellido, d.documento, m.nombre as membrete')
            ->join('miembros d', 'p.deportista = d.documento', 'left')
            ->join('membresias m', 'p.membresia = m.codigo_membresia', 'left')
            ->where("p.fecha >=", date('Y-m-01'))
            ->where("p.fecha <=", date('Y-m-30'))
            ->get();

       return $pagos;
    }

    public function pagoDiarioVentas() {
       $ventas = $this->db->table("detalle_ventas")
                          ->selectSum('valor', 'total_venta_diaria')
                          ->where("fecha", date('Y-m-d'))
                          ->whereNotIn("producto", ['1', '2'])
                          ->get();

      return $ventas; 
    }

    public function pagoMesVentas() {
       $ventas = $this->db->table("detalle_ventas")
                          ->selectSum('valor', 'total_venta_mes')
                          ->where("fecha >=", date('Y-m-01'))
                          ->where("fecha <=", date('Y-m-30'))
                          ->whereNotIn("producto", ['1', '2'])
                          ->get();

      return $ventas; 
    }

    public function pagoDiarioMembresias() {
       $membresia = $this->db->table("detalle_ventas")
                          ->selectSum('valor', 'total_membresia_diaria')
                          ->where("fecha", date('Y-m-d'))
                          ->whereIn("producto", ['1', '2'])
                          ->get();

      return $membresia; 
    }

    public function pagoMesMembresias() {
       $membresia = $this->db->table("detalle_ventas")
                          ->selectSum('valor', 'total_membresia_mes')
                          ->where("fecha >=", date('Y-m-01'))
                          ->where("fecha <=", date('Y-m-30'))
                          ->whereIn("producto", ['1', '2'])
                          ->get();

      return $membresia; 
    }
}