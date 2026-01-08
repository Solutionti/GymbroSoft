<?php

namespace App\Controllers;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class Usuarios extends BaseController {

    public function __construct() {
        $this->usuariosModel = new UsuariosModel();
    }

    public function index(){
      $data = [
        "usuario" => $this->usuariosModel->getUsuarios()
      ];
      return view('administrador/usuarios', $data);
    }

    public function getUsuarioId($documento) {
      $data = [
        "usuarios" => $this->usuariosModel->getUsuarioId($documento)
      ];
      return $this->response->setJSON($data);
    }

    public function crearUsuario() {
      $data = [
        "nombre" => $this->request->getPost('nombre'),
        "documento" => $this->request->getPost('documento'),
        "telefono" => $this->request->getPost('telefono'),
        "email" => $this->request->getPost('correo'),
        "usuario" => $this->request->getPost('usuario'),
        "password" => $this->request->getPost('password'),
      ];

      $this->usuariosModel->crearUsuario($data);

      return $this->response->setJSON([
        "status"  => "success",
        "message" => "Se ha creado la membresia correctamente"
      ]);
    }
    
    public function actualizarUsuario() {
      $data = [
        "nombre" => $this->request->getPost('nombre'),
        "documento" => $this->request->getPost('documento'),
        "telefono" => $this->request->getPost('telefono'),
        "correo" => $this->request->getPost('correo'),
        "usuario" => $this->request->getPost('usuario'),
        "password" => $this->request->getPost('password'),
      ];
      $this->usuariosModel->actualizarUsuario($data);
      echo "hola";
      exit;

      return $this->response->setJSON([
        "status"  => "success",
        "message" => "Se ha creado la membresia correctamente"
      ]);
    }

    public function eliminarUsuario($documento) {

    }

}