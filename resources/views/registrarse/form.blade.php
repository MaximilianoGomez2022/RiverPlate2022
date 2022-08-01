<?php
/** @var \App\Models\User[]|\Illuminate\Database\Eloquent\Collection $usuarios */
/** @var \App\Models\Categoria[]|\Illuminate\Database\Eloquent\Collection $categorias */
/** @var \App\Models\Talle[]|\Illuminate\Database\Eloquent\Collection $talles */
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

@extends('layouts.main')

@section('title', 'Registrate')

@section('main')
<main> 
    <section class="container mb-5" id="registro">
    <h1 class="mt-5 text-center">Registrarse</h1>
    @if ($errors->any())
    <div class="alert alert-danger">Hay errores en los datos ingresados en el formulario, por favor revisalos.</div>
    @endif
    <p class="text-center">Completá el formulario con tus datos y apretá el botón Registrarse</p>
        <div class="row justify-content-center ">
            <form action="{{ route('registrarse.agregar') }}" method="post" 
        enctype="multipart/form-data" class="w-50">
        @csrf
    
            <div class="form-group">
            <label for="name">name</label>
            <input 
            type="text" 
            id="name" 
            class="form-control @if ($errors->has('name')) is-invalid @endif"
            name="name"
            value="{{ old('name') }}"
            @if ($errors->has('name')) aria-describedby="error-name" @endif>
            @error('name')
            <div class="text-danger" id="error-name">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input 
                type="email" 
                id="email" 
                class="form-control @error('email') is-invalid @endif"
                name="email"
                value="{{ old('email') }}"
                @error('email') aria-describedby="error-email" @endif>
                    
                @error('email')
                    <div class="text-danger" id="error-email">{{ $message }}</div>
                @enderror
                </div>

                
            <div class="form-group">
                <label for="password">Password</label>
                <input 
                type="password" 
                id="password" 
                class="form-control @error('password') is-invalid @endif"
                name="password"
                value="{{ old('password') }}"
                @error('password') aria-describedby="error-password" @endif>
                    
                @error('password')
                    <div class="text-danger" id="error-password">{{ $message }}</div>
                @enderror
                </div>
    
            <button class="btn btn-danger mt-3 w-100" type="submit">Registrarse</button>
        </form>
        </div>
    </section>
</main>
@endsection