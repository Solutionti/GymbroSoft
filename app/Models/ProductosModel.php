<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model {

   public function getProductos() {
      $productos = $this->db->table('productos')
                            ->get();

      return $productos;
   }

   public function getProductosId($id) {
      $productos = $this->db->table('productos')
                            ->where('barras', $id)
                            ->get();

      return $productos;
   }

   public function crearProductos($data) {
      $producto = [
        "interno" => $data['codigo'],
        "barras" => $data['codigo'],
        "nombre" => $data['nombre'],
        "categoria" => $data['categoria'],
        "medida" => $data['medida'],
        "ganancia_max" => $data['ganancia_max'],
        "precio_venta" => $data['precio_venta'],
        "precio_proveedor" => $data['precio_proveedor'],
        "stock" => $data['stock'],
        "stock_minimo" => $data['stock_minimo'],
        "fecha" => date('Y-m-d'),
        "hora" => date('H:i'),
        "estado" => "Activo",
        "usuario" => session()->get('documento')
      ];

        $this->db->table('productos')
               ->insert($producto);
   }

   public function actualizarProductos($data) {
      $producto = [
        "nombre" => $data['nombre'],
        "categoria" => $data['categoria'],
        "medida" => $data['medida'],
        "ganancia_max" => $data['ganancia_max'],
        "precio_venta" => $data['precio_venta'],
        "precio_proveedor" => $data['precio_proveedor'],
        "stock" => $data['stock'],
        "stock_minimo" => $data['stock_minimo'],
      ];

        $this->db->table('productos')
               ->where('barras', $data['codigo'])
               ->update($producto);
   }

   public function ingresoKardex($data) {
    $ingreso = [
      "id_producto" => $data['codigo_ingreso'],
      "tp_documento" => "ENTDA",
      "entrada" => $data['cantidad_ingreso'],
      "salida" => 0,
      "devolucion" => 0,
      "fecha" => date('Y-m-d'),
      "hora" => date('H:i'),
      "descripcion" => $data['observacion_ingreso'],
      "usuario" => session()->get('documento'),
      "sede" => "Principal",
      "motivo" => $data['motivo_ingreso'],
      "saldo" => $data['stock_actual']
    ];
        $this->db->table('kardex')
                 ->insert($ingreso);

        $dataupdate = [
          "stock" => $data['stock_actual'] + $data['cantidad_ingreso']
        ];
        $this->db->table('productos')
                 ->where('barras', $data['codigo_ingreso'])
                 ->update($dataupdate);
   }

   public function salidaKardex($data) {
    $salida = [
        "id_producto" => $data['codigo_salida'],
        "tp_documento" => "SALDA",
        "entrada" => 0,
        "salida" => $data['cantidad_salida'],
        "devolucion" => 0,
        "fecha" => date('Y-m-d'),
        "hora" => date('H:i'),
        "descripcion" => $data['observacion_salida'],
        "usuario" => session()->get('documento'),
        "sede" => "principal",
        "motivo" => $data['motivo_salida'],
        "saldo" => $data['stock_actual']
        ];
            $this->db->table('kardex')
                     ->insert($salida);

        $dataupdate = [
          "stock" => $data['stock_actual'] - $data['cantidad_salida']
        ];
        $this->db->table('productos')
                 ->where('barras', $data['codigo_salida'])
                 ->update($dataupdate);
    }


   public function historicokerdex($id) {
    $historico = $this->db->table("kardex")
                            ->select("*")
                            ->where("id_producto", $id)
                            ->get();
   }

   public function countStockVentas() {
     $ventas = $this->db->table('productos')
                      ->select('SUM(precio_venta * stock) AS total_ventas', false)
                      ->get();

     return $ventas;
   }

   public function countStockProveedor() {
    $proveedor = $this->db->table('productos')
                      ->select('SUM(precio_proveedor * stock) AS total_proveedor', false)
                      ->get();

     return $proveedor;
   }

   public function countEntradas() {
    $entradas = $this->db->table('kardex')
                      ->select('COUNT(*) AS total_entradas', false)
                      ->where('tp_documento', 'ENTDA')
                      ->get();

     return $entradas;
   }

   public function countSalidas() {
    $salidas = $this->db->table('kardex')
                      ->select('COUNT(*) AS total_salidas', false)
                      ->where('tp_documento', 'SALDA')
                      ->get();

     return $salidas;
   }

}