<?php

namespace App\Models;

use CodeIgniter\Model;

class DeportistasModel extends Model {

    public function getDeportistas() {
      $deportistas = $this->db->table("miembros")
                          ->select('*')
                          ->get();

      return $deportistas;
    }

}