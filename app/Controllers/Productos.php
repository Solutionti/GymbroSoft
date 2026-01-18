<?php


namespace App\Controllers;
use App\Models\ProductosModel;
use CodeIgniter\HTTP\ResponseInterface;

class Productos extends BaseController {

    public function __construct() {
      $this->productosModel = new ProductosModel();
    }

    public function index(): string {
      $data = [
        'productos' => $this->productosModel->getProductos(),
        'totalventa' => $this->productosModel->countStockVentas(),
        'totalproveedor' => $this->productosModel->countStockProveedor(),
        'totalentradas' => $this->productosModel->countEntradas(),
        'totalsalidas' => $this->productosModel->countSalidas()
      ];
      return view('administrador/productos', $data);
    }

    public function crearProductos() {
      $data = [
        "codigo" => $this->request->getPost('codigo'),
        "nombre" => $this->request->getPost('nombre'),
        "categoria" => $this->request->getPost('categoria'),
        "medida" => $this->request->getPost('unidad_medida'),
        "ganancia_max" => $this->request->getPost('ganancia_maxima'),
        "precio_venta" => $this->request->getPost('precio_venta'),
        "precio_proveedor" => $this->request->getPost('precio_compra'),
        "stock" => $this->request->getPost('stock_inicial'),
        "stock_minimo" => $this->request->getPost('stock_minimo')
      ];
      $this->productosModel->crearProductos($data);      
    }

    public function actualizarProductos() {
      $data = [
        "codigo" => $this->request->getPost('codigo'),
        "nombre" => $this->request->getPost('nombre'),
        "categoria" => $this->request->getPost('categoria'),
        "medida" => $this->request->getPost('unidad_medida'),
        "ganancia_max" => $this->request->getPost('ganancia_maxima'),
        "precio_venta" => $this->request->getPost('precio_venta'),
        "precio_proveedor" => $this->request->getPost('precio_compra'),
        "stock" => $this->request->getPost('stock_inicial'),
        "stock_minimo" => $this->request->getPost('stock_minimo')
      ];
      $this->productosModel->actualizarProductos($data);

    }

    public function getProductosId($codigo) {
      $producto = $this->productosModel->getProductosId($codigo);
      return $this->response->setJSON($producto->getRow());
    }

    public function ingresoKardex() {
      $data = [
        "codigo_ingreso" => $this->request->getPost('codigo_ingreso'),
        "cantidad_ingreso" => $this->request->getPost('cantidad_ingreso'),
        "motivo_ingreso" => $this->request->getPost('motivo_ingreso'),
        "observacion_ingreso" => $this->request->getPost('observacion_ingreso'),
        "stock_actual" => $this->request->getPost('stock_actual')
      ];
      $this->productosModel->ingresoKardex($data);
      
    }


    public function salidaKardex() {
      $data = [
        "codigo_salida" => $this->request->getPost('codigo_salida'),
        "cantidad_salida" => $this->request->getPost('cantidad_salida'),
        "motivo_salida" => $this->request->getPost('motivo_salida'),
        "observacion_salida" => $this->request->getPost('observacion_salida'),
        "stock_actual" => $this->request->getPost('stock_actual')
      ];
      $this->productosModel->salidaKardex($data);
      
    }


}