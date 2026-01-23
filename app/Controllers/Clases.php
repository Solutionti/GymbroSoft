<?php

namespace App\Controllers;
use App\Models\ClasesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Clases extends BaseController {

    public function __construct() {
      $this->clasesModel = new ClasesModel();
    }

    public function index(): string {
      $data = [
        "horario" => $this->clasesModel->getHorarios()
      ];
      return view('administrador/programacionclases', $data);
    }

    public function crearHorario() {
      $data = [
        "nombre" => $this->request->getPost('nombre'),
        "horarios" => $this->request->getPost('horarios'),
        "hora" => $this->request->getPost('hora'),
      ];
      $this->clasesModel->crearHorario($data);

      return $this->response->setJSON([
        "status"  => "success",
        "message" => "Se ha creado el horario correctamente"
      ]);
    }

    public function crearClaseCalendario() {
      $data = [
        "nombre" => $this->request->getPost('evento'),
        "fechainicio" => $this->request->getPost('fechainicial'),
        "fechafin" => $this->request->getPost('fechafinal'),
        "hora" => $this->request->getPost('hora'),
        "descripcion" => $this->request->getPost('descripcion'),
      ];
      $this->clasesModel->CrearClase($data);
     

      return $this->response->setJSON([
        "status"  => "success",
        "message" => "Se ha creado la clase correctamente"
      ]);

    }

    public function getClasesHorarios() {
      $clases = $this->clasesModel->getClasesHorarios();

      echo json_encode($clases);
    }

    public function crearInscripciones() {
      $data = [
        "documento" => $this->request->getPost('documento'),
        "nombres" => $this->request->getPost('nombres'),
        "apellidos" => $this->request->getPost('apellidos'),
        "clase_codigo" => $this->request->getPost('clase_codigo'),
      ];
      $this->clasesModel->crearInscripcion($data);
      echo "hola";
      exit;

      return $this->response->setJSON([
        "status"  => "success",
        "message" => "Se ha inscrito a la clase correctamente"
      ]);
    }

}