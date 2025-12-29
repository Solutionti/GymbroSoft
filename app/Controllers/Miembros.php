<?php

namespace App\Controllers;

class Miembros extends BaseController {

    public function index(): string {
      return view('administrador/miembros');
    }

}