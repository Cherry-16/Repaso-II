@extends('layouts.plantilla')

@section('title', 'Registrar Libro')

@section('content')
<div class="container mt-5 col-md-6">
    {{-- Mostrar alerta de éxito --}}
    @if(session('exito'))
        <x-alert tipo="success">{{ session('exito') }}</x-alert>
    @endif

    <div class="card mb-4">
        <div class="card-header fs-5 text-center text-primary">
             {{__('Registrar Libro')}}
        </div>
        <div class="card-body">
            <form action="{{ route('guardarLibro') }}" method="POST"> 
                @csrf

                <div class="mb-3">
                    <label for="isbn" class="form-label">{{__('ISBN:')}}</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="{{old('isbn')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('isbn') }}</small>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">{{__('Título del Libro:')}}</label> 
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('titulo') }}</small>
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label"> {{__('Autor:')}}</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="{{old('autor')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('autor') }}</small>
                </div>
                <div class="mb-3">
                    <label for="pagina" class="form-label">{{__('Páginas:')}}</label>
                    <input type="number" class="form-control" id="pagina" name="pagina" value="{{old('pagina')}}"> 
                    <small class="text-danger fst-italic">{{ $errors->first('pagina') }}</small>
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label">{{__('Año:')}}</label>
                    <input type="number" class="form-control" id="año" name="año" value="{{old('año')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('año') }}</small>
                </div>
                <div class="mb-3">
                    <label for="editorial" class="form-label">{{__('Editorial:')}}</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" value="{{old('editorial')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('editorial') }}</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{__('Email de Editorial:')}}</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('email') }}</small>
                </div>
                
                <button type="submit" class="btn btn-primary">{{__('Registrar')}}</button>
            </form>
        </div>
    </div>
</div>
@endsection