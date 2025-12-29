<?php

namespace App\Controllers;

class Ventas extends BaseController {

    public function index(): string {
      return view('administrador/ventas');
    }

}