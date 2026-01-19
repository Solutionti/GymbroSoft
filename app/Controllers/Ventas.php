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

    public function finalizarVenta() {
      $deportista = $this->request->getPost('deportista');
      $ventas = $this->request->getPost('ventas');
      $total = $this->request->getPost('total');
      $fecha_inicio = $this->request->getPost('fecha_inicio');
      $fecha_final = $this->request->getPost('fecha_final');
      
      //consecutivo de venta
      $ultimaVenta = $this->ventasModel->getUltimaVenta()->consecutivo + 1;
      
      //creacion de la venta
      $data1 = [
        "consecutivo" => "VTA0".$ultimaVenta,
        "total" => $total,
        "ventas" => $ventas
      ];
      $this->ventasModel->registrarVenta($data1);
      // detalle de la venta 
      foreach($ventas as $venta) {
        $detalle = [
          "codigo_venta" => "VTA0".$ultimaVenta,
          "producto" => $venta['codigo'],
          "cantidad" => $venta['cantidad'],
          "deportista" => $deportista,
          "consec_venta" => $ultimaVenta,
          "valor" => $venta['precio'],
        ];
        $this->ventasModel->crearDetalleVenta($detalle);

        if(strlen($venta['codigo']) > 7) {
          $this->ventasModel->descuentoInventario($detalle);
        }
      }
      //creacion de pagos
      if(strlen($venta['codigo']) < 7) {
        $membresiaact = $venta['codigo'];
      }
      else {
        $membresiaact = "0";
      }
      $data3 = [
        "deportista" => $deportista,
        "fecha_inicio" => $fecha_inicio,
        "fecha_final" => $fecha_final,
        "membresia" => $membresiaact,
        "total" => $total
      ];
      $this->ventasModel->crearPagos($data3);
      
      //actualizar el dato del deportista
      $data4 = [
        "deportista" => $deportista,
        "fecha_inicio" => $fecha_inicio,
        "fecha_final" => $fecha_final,
        "membresia" => "1"
      ];
      $this->ventasModel->actualizarDeportista($data4);
    }

    public function crearDeportista() {
      $nombre = $this->request->getPost('nombre');
      $apellido = $this->request->getPost('apellido');
      $documento = $this->request->getPost('documento');
      $telefono = $this->request->getPost('telefono');
      $correo = $this->request->getPost('correo');
      $sexo = $this->request->getPost('sexo');

      $data = [
        "nombre" => $nombre,
        "apellido" => $apellido,
        "documento" => $documento,
        "telefono" => $telefono,
        "correo" => $correo,
        "sexo" => $sexo
      ];
      $this->ventasModel->crearDeportista($data);  
    }

    public function CrearVariableSesion() {
    $inventario = $this->request->getPost('codigo');
    session()->set('validacion', $inventario);
    
  }

  public function actualizarDeportistaEstado() {
    $deportista = $this->request->getPost('codigo');

    $data = [
      "deportista" => $deportista
    ];
    $this->ventasModel->actualizarDeportistaEstado($data);
  }



}