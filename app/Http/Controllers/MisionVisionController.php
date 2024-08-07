<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisionVisionController extends Controller
{
    public function index() {
        return view('misionvision');
    }
}
