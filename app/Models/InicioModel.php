<?php

namespace App\Models;
use CodeIgniter\Model;

class InicioModel extends Model {

    public function countDeportistas() {
      $deportistas = $this->db->table("miembros")
                          ->selectCount('documento', 'total_deportistas')
                          ->get();

      return $deportistas;
    }

    public function countPagos() {
      $pagos = $this->db->table("pagos")
                          ->selectSum('total', 'total_pagos')
                          ->get();

      return $pagos;  
    }

    public function countVisitas() {
      $visitas = $this->db->table("miembros")
                          ->selectCount('documento', 'total_visitas')
                          ->where("estado", "Activo")
                          ->get();

      return $visitas;
    }

    public function countHombres() {
      $hombres = $this->db->table("miembros")
                          ->selectCount('documento', 'total_hombres')
                          ->where("sexo", "Masculino")
                          ->get();

      return $hombres; 
    }

    public function countMujeres() {
      $mujeres = $this->db->table("miembros")
                          ->selectCount('documento', 'total_mujeres')
                          ->where("sexo", "Femenino")
                          ->get();

      return $mujeres;
    }

    public function countDeportistasActivos() {
      $activos = $this->db->table("miembros")
                          ->select("*")
                          ->limit(8)
                          ->get();

      return $activos;  
    }
}