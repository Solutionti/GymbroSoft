<?php

namespace App\Controllers;
use App\Models\InicioModel;
use App\Models\ClasesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController {
     
    public function __construct() {
        $this->inicioModel = new InicioModel();
        $this->clasesModel = new ClasesModel();
     }

    public function index(){
      $data = [
        "deportista" => $this->inicioModel->countDeportistas(),
        "pago" => $this->inicioModel->countPagos(),
        "hombre" => $this->inicioModel->countHombres(),
        "mujer" => $this->inicioModel->countMujeres(),
        "activo" => $this->inicioModel->countDeportistasActivos(),
        "visita" => $this->inicioModel->countVisitas()
      ];
      return view('administrador/inicio', $data);
    }

    public function inscripciones(){
      $data = [
        "clases" => $this->clasesModel->getClasesInscripciones()
      ];
      return view('administrador/inscripcion', $data);
    }

    
    
}
