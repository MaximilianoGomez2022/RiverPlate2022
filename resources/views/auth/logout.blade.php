
@extends('layouts.main');

@section('title', 'Cerrar Sesión');

@section('main')

<main>
    <section class="container" id="sec-login">
        <div class="row">
        <h1>Ingresar al panel de Administración</h1>
        <h2>Ingresá tus datos para iniciar sesión</h2>             

        <form method="post" action="{{ route('auth.login.ejecutar') }}">
        @csrf
        <div class="form-group">
        <label for="email">Email</label>
        <input 
        type="email"
        class="form-control" 
        id="email" name="email"  
        placeholder="Ingrese su Email"
        value="{{old('email')}}">
        </div>
        <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-danger w-100">Ingresar</button>
        </form>
        </div>
    </section>
</main>

@endsection