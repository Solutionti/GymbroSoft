<?php

namespace App\Controllers;

class Pagos extends BaseController {

    public function index(): string {
      return view('administrador/pagos');
    }

}