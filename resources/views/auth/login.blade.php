
@extends('layouts.main')

@section('title', 'Ingresar')

@section('main')

<main>
    <section class="container" id="sec-login">
        <div class="row">
           

        <form method="post" action="{{ route('auth.login.ejecutar') }}">
        @csrf
        <h1 class="mt-5">Iniciar sesión</h1>
        <p class="text-center">Ingresá tus datos para ingresar al panel de administración</p>  
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

        <section class="container sponsors">
          <h2 class="d-none">Nuestros Sponsors</h2>
            <div class="row">
                <div class="col-3">
                  <img src="img/adidas-250px.png" alt="logo de adidas">
                </div>
                <div class="col-3">
                  <img src="img/turkish-250px.png" alt="logo de turkish airlines">
                </div>
                <div class="col-3">
                  <img src="img/assits-250px.png" alt="logo de assists card">
                </div>
                <div class="col-3">
                  <img src="img/axion-250px.png" alt="logo de axion energy">
                </div>
            </div>
        </section>
    </section>
</main>

@endsection