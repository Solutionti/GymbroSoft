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
        "nombre" => $this->request->getPost('nombre'),
        "fechainicio" => $this->request->getPost('fechainicio'),
        "fechafin" => $this->request->getPost('fechafin'),
        "hora" => $this->request->getPost('hora'),
        "estado" => $this->request->getPost('estado'),
        "color" => $this->request->getPost('color'),
        "descripcion" => $this->request->getPost('descripcion'),
      ];
      $this->clasesModel->CrearClase($data);

      return $this->response->setJSON([
        "status"  => "success",
        "message" => "Se ha creado la clase correctamente"
      ]);

    }

}