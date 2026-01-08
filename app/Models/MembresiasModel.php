<?php

namespace App\Models;

use CodeIgniter\Model;

class MembresiasModel extends Model {

    public function getMembresias() {
      $membresias = $this->db->table("membresias")
                          ->select('*')
                          ->get();

      return $membresias;
    }

    public function getMembresiasId($codigo_membresia) {
        $membresias = $this->db->table("membresias")
                          ->select('*')
                          ->where('codigo_membresia', $codigo_membresia)
                          ->get();

      return $membresias->getResult();
    }

    public function crearMembresias($data) {
        $membresia = [
          "nombre" => $data['nombre'],
          "dias" => $data['dias'],
          "precio" => $data['precio'],
          "estado" => $data['estado'],
          "usuario" => session()->get('documento')
        ];
        $this->db->table("membresias")
                 ->insert($membresia);
        
    }

    public function actualizarMembresias($data) {
        $membresia = [
          "nombre" => $data['nombre'],
          "dias" => $data['dias'],
          "precio" => $data['precio'],
          "estado" => $data['estado'],
        ];
        $this->db->table("membresias")
                 ->where('codigo_membresia', $data['codigo'])
                 ->update($membresia);
        
    }

    public function eliminarMembresias() {
        
    }

}