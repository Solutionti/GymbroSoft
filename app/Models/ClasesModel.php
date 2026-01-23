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
        "estado" => "Activo",
        "usuario" => session()->get('documento'),
        "color" => "green",
        "descripcion" => $data["descripcion"],
      ];
        $this->db->table("clases")
                 ->insert($clases);
    }

    public function getClasesHorarios() {
      $clases = $this->db->table("clases")
                         ->select('UPPER(nombre) as title, descripcion as descripcion, CONCAT(fechainicio," ",hora) as start, CONCAT(fechafin," ",hora) as end, color as color')
                         ->get();

      return $clases->getResult();
    }

    public function getClasesInscripciones() {
      $inscripciones = $this->db->table("clases")
                         ->select('*')
                         ->where('fechainicio >=', date('Y-m-d'))
                         ->get();

      return $inscripciones;
    }

    public function crearInscripcion( $data) {
      $inscripcion = [
        "documento" => $data["documento"],
        "nombres" => $data["nombres"],
        "apellidos" => $data["apellidos"],
        "codigo_clase" => $data["clase_codigo"],
        "estado" => "Activo",
      ];
      $this->db->table("inscripciones")
               ->insert($inscripcion);

    }

}