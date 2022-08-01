<?php
/** @var \App\Models\Noticia[]|\Illuminate\Database\Eloquent\Collection $noticias */
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

@extends('layouts.main')

@section('title', 'Publicar noticia')

@section('main')
<main> 
    <section class="container section-noticias mb-5">
    <h1 class="mt-5">Publicá una nueva noticia</h1>
    @if ($errors->any())
    <div class="alert alert-danger">Hay errores en los datos ingresados en el formulario, por favor revisalos.</div>
    @endif
    <p>Completá el formulario con los datos de la noticia y dale click al botón Publicar</p>

        <form action="{{ route('noticias.agregar.ejecutar')}}" method="post" 
        enctype="multipart/form-data" id="form-noticias">
        @csrf
    
            <div class="form-group">
            <label for="titulo">Título ( Debe tener como mínimo 10 caractéres )</label>
            <input 
            type="text" 
            id="titulo" 
            class="form-control @if ($errors->has('titulo')) is-invalid @endif"
            name="titulo"
            value="{{ old('titulo') }}"
            @if ($errors->has('titulo')) aria-describedby="error-titulo" @endif>
            @error('titulo')
            <div class="text-danger" id="error-titulo">{{ $message }}</div>
            @enderror
            </div>
    
    
            <div class="form-group">
            <label class="mt-3" for="precio">Sinopsis ( Debe tener como mínimo 10 caractéres )</label>
            <input 
            type="text" 
            id="sinopsis" 
            class="form-control @error('sinopsis') is-invalid @endif"
            name="sinopsis"
            value="{{ old('sinopsis') }}"
            @error('sinopsis') aria-describedby="error-sinopsis" @endif>
                
            @error('sinopsis')
                <div class="text-danger" id="error-sinopsis">{{ $message }}</div>
            @enderror
            </div>
    
            <div class="form-group">
            <label class="mt-3" for="texto">Texto ( Debe tener como mínimo 10 caractéres )</label>
            <textarea
            cols="30"
            rows="5"
            type="text" 
            id="texto" 
            class="form-control @error('texto') is-invalid @endif"
            name="texto"
            value="{{ old('texto') }}"
            @error('texto') aria-describedby="error-texto" @endif>
            </textarea>
                
            @error('texto')
                <div class="text-danger" id="error-texto">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label class="mt-3" for="fecha_publicacion">Fecha de publicación</label>
                <input
                type="date" 
                id="fecha_publicacion" 
                class="form-control @error('fecha_publicacion') is-invalid @endif"
                name="fecha_publicacion"
                value="{{ old('fecha_publicacion') }}"
                @error('fecha_publicacion') aria-describedby="error-fecha_publicacion" @endif>
                @error('fecha_publicacion')
                <div class="text-danger" id="error-fecha_publicacion">{{ $message }}</div>
                @enderror
                </div>
            
            <div class="form-group mt-3">
            <label class="mt-3" for="imagen">Imagen (Opcional)</label>
            <input type="file" id="imagen" class="form-control" name="imagen">
            </div>

            <div class="form-group mt-3">
            <label class="mt-3" for="imagen_descripcion">Imagen Descripción (Opcional)</label>
            <input type="text" id="imagen_descripcion" class="form-control" name="imagen_descripcion"
            value="{{ old('imagen_descripcion') }}">
            </div>
    
            <button class="btn btn-danger mt-3" type="submit">Publicar</button>
        </form>
        </div>
    </section>
</main>
@endsection