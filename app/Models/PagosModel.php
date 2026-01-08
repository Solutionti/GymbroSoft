<?php

namespace App\Models;

use CodeIgniter\Model;

class PagosModel extends Model {

    public function getPagos() {
      $pagos = $this->db->table('pagos p')
            ->select('p.*, d.nombre, d.apellido, d.documento, m.nombre as membrete')
            ->join('miembros d', 'p.deportista = d.documento')
            ->join('membresias m', 'p.membresia = m.codigo_membresia')
            ->get();

       return $pagos;
    }
}