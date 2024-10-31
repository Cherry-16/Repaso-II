@extends('layouts.plantilla')

@section('title', 'Registrar Libro')

@section('content')
<div class="container mt-5 col-md-6">
    @if (session('exito'))
        <div class="alert alert-success">
            {{ session('exito') }}
        </div>
    @endif
    <div class="card mb-4"> <!-- Agregar un margen inferior a la tarjeta -->
        <div class="card-header fs-5 text-center text-primary">
            Registrar Libro
        </div>
        <div class="card-body">
            <form action="{{ route('guardarLibro') }}" method="POST"> 
                @csrf

                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN:</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('isbn') }}</small>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título del Libro:</label> 
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('titulo') }}</small>
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor:</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="{{ old('autor') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('autor') }}</small>
                </div>
                <div class="mb-3">
                    <label for="pagina" class="form-label">Páginas:</label>
                    <input type="number" class="form-control" id="pagina" name="pagina" value="{{ old('pagina') }}"> 
                    <small class="text-danger fst-italic">{{ $errors->first('pagina') }}</small>
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label">Año:</label>
                    <input type="number" class="form-control" id="año" name="año" value="{{ old('año') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('año') }}</small>
                </div>
                <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial:</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" value="{{ old('editorial') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('editorial') }}</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email de Editorial:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('email') }}</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>
@endsection