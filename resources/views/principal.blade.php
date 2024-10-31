@extends('layouts.plantilla')

@section('titulo')

@section('contenido')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('principal') }}">Biblioteca</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registro') }}">{{ __('Registro de Libro') }}</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Noticia Literaria</h2>
        <p>¡Bienvenido a nuestra biblioteca! Aquí encontrarás una amplia colección de libros.</p>
    </div>

    <footer class="text-center mt-5">
        <p>Biblioteca XYZ | &copy; {{ date('Y') }}</p>
    </footer>
@endsection