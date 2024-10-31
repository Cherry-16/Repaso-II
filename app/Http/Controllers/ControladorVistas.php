<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibro;  

class ControladorVistas extends Controller
{
    public function home()
    {
        return view('principal');
    } 
    public function registrar()
    {
        return view('registro_libro');
    }
    public function procesarLibro(ValidadorLibro $request)
    {
        $titulo = $request->input('titulo');
        session()->flash('exito', 'Todo correcto: Libro "' . $titulo . '" guardado');
        return redirect()->route('rutaregistro');
    }
}
