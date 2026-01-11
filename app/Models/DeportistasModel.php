<?php

namespace App\Models;

use CodeIgniter\Model;

class DeportistasModel extends Model {

    public function getDeportistas() {
      $deportistas = $this->db->table("miembros m")
                          ->select('m.*, mb.nombre as membresia')
                          ->join('membresias mb', 'm.membresia = mb.codigo_membresia')
                          ->get();

      return $deportistas;
    }

}