<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model {

    public function getUsuarios() {
        $usuarios = $this->db->table('usuarios')
            ->select('*')
            ->get();

        return $usuarios;
    }

    public function getUsuarioId($documento) {
        $usuarios  = $this->db->table('usuarios')
            ->select('*')
            ->where("documento", $documento)
            ->get();

        return $usuarios->getResult();
    }

    public function crearUsuario($data) {
        $usuario = [
          "usuario" => $data["usuario"],
          "password" => password_hash($data["password"], PASSWORD_DEFAULT),
          "email" => $data["email"],
          "nombre" => $data["nombre"],
          "apellido" => $data["nombre"],
          "documento" => $data["documento"],
          "telefono" => $data["telefono"],
          "hora" => date("H:i"),
          "fecha" => date("d-m-Y"),
          "rol" => "Administrador",
          "estado" => "Activo",
          "usuario_creador" => session()->get('documento')
        ];
        $this->db->table("usuarios")
                 ->insert($usuario);

    }

    public function actualizarUsuario($data) {
        $usuario = [
          "usuario" => $data["usuario"],
          "email" => $data["correo"],
          "nombre" => $data["nombre"],
          "documento" => $data["documento"],
          "telefono" => $data["telefono"],
        ];
        $this->db->table("usuarios")
                 ->where("documento", $data["documento"])
                 ->update($usuario);
    }

    public function eliminarUsuario($documento) {

    }

    public function loginApp($user, $password) {
       $query = $this->db->table('usuarios')
             ->select('*')
             ->where('usuario', $user)
             ->orWhere('email', $user)
             ->where('estado', 'Activo')
             ->get();

        if($query) {
          $contador = 0;
          $data = [];
          foreach($query->getResult() as $value){
            $passAct = $value->password;
            if(password_verify($password, $passAct)){
              $contador ++;
              $data = $value;
            }
          }
          
          if($contador == 1) {
            return $data;
          }
          else {
            return false;
          }
        }
        else {
          return false;
        } 
    }
}