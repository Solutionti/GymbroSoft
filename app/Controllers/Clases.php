<?php

namespace App\Controllers;

class Clases extends BaseController {

    public function index(): string {
      return view('administrador/programacionclases');
    }

}