<?php
/** @var \App\Models\Producto[]|\Illuminate\Database\Eloquent\Collection $productos */
/** @var \App\Models\Categoria[]|\Illuminate\Database\Eloquent\Collection $categorias */
/** @var \App\Models\Talle[]|\Illuminate\Database\Eloquent\Collection $talles */
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

@extends('layouts.main')

@section('title', 'Agregar producto')

@section('main')
<main> 
    <section class="container mb-5 mt-5">
    <h1>Agregá un producto a la lista</h1>
    @if ($errors->any())
    <div class="alert alert-danger">Hay errores en los datos ingresados en el formulario, por favor revisalos.</div>
    @endif
    <p>Completá el formulario con los datos y apretá el botón Agregar</p>

        <form action="{{ route('tienda.agregar.ejecutar') }}" method="post" 
        enctype="multipart/form-data">
        @csrf
    
            <div class="form-group">
            <label for="nombre">Nombre</label>
            <input 
            type="text" 
            id="nombre" 
            class="form-control @if ($errors->has('nombre')) is-invalid @endif"
            name="nombre"
            value="{{ old('nombre') }}"
            @if ($errors->has('nombre')) aria-describedby="error-nombre" @endif>
            @error('nombre')
            <div class="text-danger" id="error-nombre">{{ $message }}</div>
            @enderror
            </div>
    
    
            <div class="form-group">
            <label for="precio">Precio</label>
            <input 
            type="" 
            id="precio" 
            class="form-control @error('precio') is-invalid @endif"
            name="precio"
            value="{{ old('precio') }}"
            @error('precio') aria-describedby="error-precio" @endif>
                
            @error('precio')
                <div class="text-danger" id="error-precio">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group mb-4">
                <label for="categorias" for="categoria_id" name="categoria_id">Categorías</label>
                <select id="categoria_id" name="categoria_id" class="form-select" aria-label="Default select example">
                    <option value="">Elegí una categoría</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->categoria_id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                @error('categoria_id')
                <div class="text-danger mt-4 mb-3" id="error-categoria_id">{{ $message }}</div>
                @enderror
                </div>
    
            <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input
            type="text" 
            id="descripcion" 
            class="form-control @error('descripcion') is-invalid @endif" 
            name="descripcion"
            value="{{ old('descripcion') }}"
            @error('descripcion') aria-describedby="error-desc" @endif>

            @error('descripcion')
                <div class="text-danger" id="error-desc">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
            <label for="imagen">Imagen (Opcional)</label>
            <input type="file" id="imagen" class="form-control" name="imagen">
            </div>
            
            <div class="form-group mb-3">
            <label for="imagen_descripcion">Imagen Descripción (Opcional)</label>
            <input type="text" id="imagen_descripcion" class="form-control" name="imagen_descripcion"
            value="{{ old('imagen_descripcion') }}">
            </div>

            <fieldset>
                <legend class="mb-3">Talles Disponibles</legend>
                @foreach ($talles as $talle)
                <div class="form-check form-check-inline">
                    <input 
                    type="checkbox" 
                    name="talle_id[]" 
                    id="talle_id-{{ $talle->talle_id }}" 
                    value="{{ $talle->talle_id }}"
                    class="form-check-input">
                    <label 
                    class="form-check-label me-3" 
                    for="talle_id-{{ $talle->talle_id }}">
                    {{ $talle->nombre }}</label>
                </div>
                @endforeach
            </fieldset>
    
            <button class="btn btn-danger" type="submit">Agregar</button>
        </form>
        </div>
    </section>
</main>
@endsection