<?php

namespace App\Controllers;
use App\Models\VentasModel;
use App\Models\MembresiasModel;
use CodeIgniter\HTTP\ResponseInterface;

class Ventas extends BaseController {

    public function __construct() {
        $this->ventasModel = new VentasModel();
        $this->membresiasModel = new MembresiasModel();
    }
    public function index(): string {
      $data = [
        "membresia" => $this->membresiasModel->getMembresias(),
        "producto" => $this->ventasModel->getProductos()
      ];
      return view('administrador/ventas', $data);
    }

    public function getproductoventa($codigo) {
      $producto = $this->ventasModel->getproductoventa($codigo);
      
       if($producto) {
         echo json_encode($producto);
       }
       else {
        echo "error";
       }
    }

    public function getDeportistaId($codigo) {
      $deportista = $this->ventasModel->getDeportistaId($codigo);
      
       if($deportista) {
         echo json_encode($deportista);
       }
       else {
        echo "error";
       }
    }



}