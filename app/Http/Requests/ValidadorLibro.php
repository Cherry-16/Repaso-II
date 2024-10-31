<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibro extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
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

    public function messages()
    {
        return [
            'isbn.required' => 'El campo ISBN es obligatorio.',
            'isbn.numeric' => 'El ISBN debe ser un número.',
            'isbn.min' => 'El ISBN debe tener al menos 13 dígitos.',
            'titulo.required' => 'El título es obligatorio.',
            'titulo.max' => 'El título no puede exceder 150 caracteres.',
            'autor.required' => 'El autor es obligatorio.',
            'pagina.required' => 'El número de páginas es obligatorio.',
            'pagina.integer' => 'El número de páginas debe ser un número entero positivo.',
            'año.required' => 'El año es obligatorio.',
            'año.integer' => 'El año debe ser un número entero.',
            'año.min' => 'El año debe ser al menos 1000.',
            'año.max' => 'El año no puede ser mayor al año actual.',
            'editorial.required' => 'La editorial es obligatoria.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El formato del email es inválido.',
        ];
    }
}