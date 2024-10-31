<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibro extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }
   

    public function rules(): array
    {
        return [
            'isbn' => 'required|numeric|min:13', // Solo números, mínimo 13 dígitos
            'titulo' => 'required|string|max:150', // String, máximo 150 caracteres
            'autor' => 'required|string|max:100', // String, máximo 100 caracteres
            'pagina' => 'required|integer|min:1', // Solo números enteros positivos
            'año' => 'required|integer|min:1000|max:' . date('Y'), // 4 dígitos entre 1000 y el año actual
            'editorial' => 'required|string|max:100', // String, máximo 100 caracteres
            'email' => 'required|email', // Validación de formato de correo
        ];
    }
}