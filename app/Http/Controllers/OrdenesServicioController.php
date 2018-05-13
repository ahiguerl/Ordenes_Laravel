<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenesServicioController extends Controller
{
    public function servicio(){
      return view('layouts/ejemplo');
    }

    public function crear(){
      return "Crear Servicio";
    }
}
