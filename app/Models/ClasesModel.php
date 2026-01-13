<?php

namespace App\Models;

use CodeIgniter\Model;

class ClasesModel extends Model {

    public function getHorarios() {
      $horarios = $this->db->table("horarios")
                           ->select('*')
                           ->get();

      return $horarios;
    }

    public function crearHorario($data) {
      $horario = [
        "nombre" => $data["nombre"],
        "horarios" => $data["horarios"],
        "hora" => $data["hora"],
      ];
      $this->db->table("horarios")
               ->insert($horario);
    }

    public function CrearClase($data) {
      $clases = [
        "nombre" => $data["nombre"],
        "fechainicio" => $data["fechainicio"],
        "fechafin" => $data["fechafin"],
        "hora" => $data["hora"],
        "estado" => $data["estado"],
        "usuario" => session()->get('documento'),
        "color" => "green",
        "descripcion" => $data["descripcion"],
      ];
        $this->db->table("clases")
                 ->insert($clases);
    }

    public function getClasesHorarios() {

    }
}