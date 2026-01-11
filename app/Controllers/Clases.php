<?php

namespace App\Controllers;
use CodeIgniter\HTTP\ResponseInterface;

class Clases extends BaseController {

    public function __construct() {
    }

    public function index(): string {
     
      return view('administrador/programacionclases');
    }

}