<?php

namespace App\Controllers;
use App\Models\DeportistasModel;
use CodeIgniter\HTTP\ResponseInterface;

class Miembros extends BaseController {

    public function __construct() {
        $this->deportistasModel = new DeportistasModel();
    }

    public function index(){
      $data = [
        "deportista" => $this->deportistasModel->getDeportistas()
      ];
      return view('administrador/miembros', $data);
    }

}