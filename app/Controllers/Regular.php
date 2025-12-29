<?php

namespace App\Controllers;

class Regular extends BaseController {

    public function index(): string {
      return view('administrador/visitaregular');
    }

}