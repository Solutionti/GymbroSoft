<?php

namespace App\Controllers;

class Membresias extends BaseController {

    public function index(): string {
      return view('administrador/membresias');
    }
    
}