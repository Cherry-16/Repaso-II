<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function index()
    {
        return view('principal');
    }

    public function registro()
    {
        return view('registro_libro');
    }

    public function guardarLibro(Request $request)
    {
        $request->validate([
            'isbn' => 'required|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|between:1000,' . date('Y'),
            'editorial' => 'required|string',
            'email_editorial' => 'required|email',
        ]);
        
        return redirect()->back()->with('exito', 'Libro "' . $request->titulo . '" guardado');
    }
}
