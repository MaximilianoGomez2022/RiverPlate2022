<?php
/** @var \App\Models\Noticia $noticia */
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

@extends('layouts.main')

@section('title', 'Editar noticia '. $noticia->titulo)

@section('main')
<main> 
    <section class="container section-noticias">
    <div class="titulo">
        <h1 class="mt-5">Editar {{  $noticia->titulo }} </h1>
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">Hay errores en los datos ingresados en el formulario, por favor revisalos.</div>
    @endif
    <p>Editá la noticia y luego presioná el botón editar</p>

        <form action="{{ route('noticias.editar.ejecutar', ['id'=>$noticia->noticia_id]) }}" method="post" 
        enctype="multipart/form-data" id="form-prod" class="mb-5">
        @csrf
    
            <div class="form-group">
            <label for="titulo">Título</label>
            <input 
            type="text" 
            id="titulo" 
            class="form-control @if ($errors->has('titulo')) is-invalid @endif"
            name="titulo"
            value="{{ old('titulo', $noticia->titulo) }}"
            @if ($errors->has('titulo')) aria-describedby="error-titulo" @endif>
            @error('titulo')
            <div class="text-danger" id="error-titulo">{{ $message }}</div>
            @enderror
            </div>
    
    
            <div class="form-group">
            <label for="precio">Sinopsis</label>
            <input 
            type="text" 
            id="sinopsis" 
            class="form-control @error('sinopsis') is-invalid @endif"
            name="sinopsis"
            value="{{ old('sinopsis', $noticia->sinopsis) }}"
            @error('sinopsis') aria-describedby="error-sinopsis" @endif>
                
            @error('sinopsis')
                <div class="text-danger" id="error-sinopsis">{{ $message }}</div>
            @enderror
            </div>
    
            <div class="form-group">
            <label for="texto">Texto</label>
            <input
            type="text" 
            id="texto" 
            class="form-control @error('texto') is-invalid @endif"
            name="texto"
            value="{{ old('texto', $noticia->texto) }}"
            @error('texto') aria-describedby="error-texto" @endif>
                
            @error('texto')
                <div class="text-danger" id="error-texto">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="fecha">Fecha de publicación</label>
                <input
                type="date" 
                id="fecha" 
                class="form-control @error('fecha') is-invalid @endif"
                name="fecha"
                value="{{ old('fecha', $noticia->fecha_publicacion->toDateString() ) }}"
                @error('fecha') aria-describedby="error-fecha" @endif>
                    
                @error('fecha')
                    <div class="text-danger" id="error-fecha">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
            <label for="imagen">Imagen (Opcional)</label>
            <input type="file" id="imagen" class="form-control" name="imagen">
            </div>

            <div class="form-group">
            <label for="imagen_descripcion">Imagen Descripción (Opcional)</label>
            <input type="text" id="imagen_descripcion" class="form-control" name="imagen_descripcion"
            value="{{ old('imagen_descripcion', $noticia->imagen_descripcion) }}">
            @error('imagen_descripcion')
            <div class="text-danger" id="error-texto">{{ $message }}</div>
            @enderror
            </div>
    
            <button class="btn btn-danger mt-3" type="submit">Editar</button>
        </form>
        </div>
    </section>
</main>
@endsection