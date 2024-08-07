<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index() {
        // dd("HOLA MUNDO");
        return view('inicio');
    }

}
