<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RYTQ - Panel de administración @yield('title')</title>
        <link rel="stylesheet" href="<?=url('css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=url('css/estilos.css')?>">
    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navadmin">

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
                <a href="<?=url('/')?>">Volver a home</a>
            </li>
            </ul>
        </div>
        </div>
        </nav>

        <div id="logo">
        <a href="#"><img src="img/logo.png" alt="logo-river"></a>
        </div>
    </header>
    <div class="container">
        @yield('main')
    </div>
    </body>
    <footer>
        Pie de Página
    </footer>
</html>