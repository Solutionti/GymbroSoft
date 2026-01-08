<?php

namespace App\Controllers;
use App\Models\MembresiasModel;
use CodeIgniter\HTTP\ResponseInterface;

class Membresias extends BaseController {

     public function __construct() {
        $this->membresiasModel = new MembresiasModel();
     }

    public function index(){

      $data = [
        "membresia" => $this->membresiasModel->getMembresias()
      ];
      return view('administrador/membresias', $data);
    }
    
    public function getMembresiaId($codigo_membresia){
      $data = [
        "membresias" => $this->membresiasModel->getMembresiasId($codigo_membresia)
      ];
      return $this->response->setJSON($data);
    }

    public function crearMembresia(){
      $data = [
        "nombre" => $this->request->getPost('nombre'),
        "dias" => $this->request->getPost('dias'),
        "precio" => $this->request->getPost('precio'),
        "estado" => $this->request->getPost('estado'),
      ];
      $this->membresiasModel->crearMembresias($data);

      return $this->response->setJSON([
        "status"  => "success",
        "message" => "Se ha creado la membresia correctamente"
      ]);
    }

    public function actualizarMembresia(){
      $data = [
        "codigo" => $this->request->getPost('codigo'),
        "nombre" => $this->request->getPost('nombre'),
        "dias" => $this->request->getPost('dias'),
        "precio" => $this->request->getPost('precio'),
        "estado" => $this->request->getPost('estado'),
      ];
      $this->membresiasModel->actualizarMembresias($data);

      return $this->response->setJSON([
        "status"  => "success",
        "message" => "Se ha actualizado la membresia correctamente"
      ]);
    }
    
}