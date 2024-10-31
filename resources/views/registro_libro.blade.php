@extends('layouts.plantilla')

@section('title', 'Registrar Libro')

@section('content')
<div class="card">
    <div class="card-header fs-5 text-center text-primary">
        Registrar Libro
    </div>
    <div class="card-body">
        @if (session('exito'))
            <div class="alert alert-success">
                {{ session('exito') }}
            </div>
        @endif
        <form action="{{ route('guardarLibro') }}" method="POST"> 
            @csrf
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN:</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título del Libro:</label> 
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <div class="mb-3">
                <label for="pagina" class="form-label">Páginas:</label>
                <input type="number" class="form-control" id="pagina" name="pagina" required> 
            </div>
            <div class="mb-3">
                <label for="año" class="form-label">Año:</label>
                <input type="number" class="form-control" id="año" name="año" required>
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" class="form-control" id="editorial" name="editorial" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email de Editorial:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
@endsection