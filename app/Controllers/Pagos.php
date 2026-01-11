<?php

namespace App\Controllers;
use App\Models\PagosModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pagos extends BaseController {

    public function __construct() {
        $this->pagosModel = new PagosModel();
    }

    public function index(){
      $data = [
        "pago" => $this->pagosModel->getPagos(),
        "pagoDiarioVentas" => $this->pagosModel->pagoDiarioVentas(),
        "pagoMesVentas" => $this->pagosModel->pagoMesVentas(),
        "pagoDiarioMembresias" => $this->pagosModel->pagoDiarioMembresias(),
        "pagoMesMembresias" => $this->pagosModel->pagoMesMembresias()
      ];
      return view('administrador/pagos', $data);
    }

}