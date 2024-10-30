<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    //
    public function index()
    {
        return view('principal');
    }
    public function registro()
    {
        return view('registro_libro');
}
}