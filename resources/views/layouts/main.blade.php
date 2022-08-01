<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>River.com - @yield('title')</title>
        <link rel="stylesheet" href="<?=url('css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=url('css/estilos.css')?>">
    </head>
    <body>
    <header>
    @guest
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav-home">

        <div class="container-fluid">

        <button class="navbar-toggler ms-auto" 
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#barra"
                    aria-controls="barra"
                    aria-expanded="false"
                    aria-label="Boton desplegable hamburguesa">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="barra">
            <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item">
                <a href="<?=url('/')?>">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?=url('tienda')?>">Tienda</a>
            </li>
            <li class="nav-item">
                <a href="<?=url('noticias')?>">Noticias</a>
            </li>         
            <li class="nav-item">
                <a href="<?=route('auth.login.form')?>">Iniciar sesión</a>
            </li>
            <li class="nav-item">
                <a href="<?=route('registrarse.form')?>">Registrarse</a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
            @endguest

            @auth
            <nav class="navbar navbar-expand-lg navbar-dark" id="nav-admin">

                <div class="container-fluid">
        
                <button class="navbar-toggler ms-auto" 
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#barra"
                            aria-controls="barra"
                            aria-expanded="false"
                            aria-label="Boton desplegable hamburguesa">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="barra">
                    <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a href="<?=url('/')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=url('tienda')?>">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=url('noticias')?>">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=route('usuarios.index')?>">Usuarios</a>
                    </li> 
                    <li class="nav-item">
                    <form action="{{ route('auth.logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger nav-link" id="cerrar-sesion" href="#">{{ auth()->user()->email }} (Cerrar Sesión)</button>
                    </form>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
            @endauth
        <div id="logo">
        <a href=<?=url('/')?>><img src=<?=url('img/logo.png')?> alt="logo de River Plate"></a>
        </div>
    </header>
    <div>

        @if (Session::has('messagge.success'))
        <div class="alert alert-success container mt-3"> {!! Session::get('messagge.success') !!} </div>
        @endif

        @if (Session::has('messagge.error'))
        <div class="alert alert-danger container mt-3"> {!! Session::get('messagge.error') !!} </div>
        @endif

        @yield('main')
    </div>
    <footer>Portales y comercio electrónico - Maxi Gomez - 2022</footer>
    </body>
</html>