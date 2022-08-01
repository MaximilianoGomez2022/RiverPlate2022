<?php
/** @var \App\Models\Noticia[] | Illuminate\Database\Eloquent\Collection $noticias */
?>

@extends('layouts.main')

@section('title', 'Noticias')

@section('main')
    <section class="container" id="panel-noticias">
        <h1>Listado de noticias</h1>

        @guest
        <article class="row d-flex  justify-content-start align-items-start">
            @foreach ($noticias as $noticia)
                <div class="col-md-6">
                <a href="{{ route('noticias.ver.noticia', ['id'=> $noticia->noticia_id])}}" class="decoration-none">
                    <div class="flex-container">
                        <div class="noticias-item-content">
                            <h2>{{$noticia->titulo}}</h2>
                            <p>{{$noticia->sinopsis}}</p>
                        </div>
                        <div class="noticias-imagen">
                            <img src="img/{{$noticia->imagen}}" alt="{{$noticia->imagen_descripcion}}">
                        </div>
                        <div>
                         <p>Fecha de publicación :  {{ $noticia->fecha_publicacion->format('d / m / Y') }}</p>
                        </div>  
                    </div>                     
                </a>
                <hr>
                </div>
            @endforeach
            </article>   
        @endguest
            
       
        @auth
        <h2>Panel de Administración</h2>
        <div>
            <a href="{{ route('noticias.publicar.form')}}">Publicá una nueva noticia</a>
        </div>
        <div class="row justify-content-center form-edit">

            <table>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Título</td>
                        <td>Sinopsis</td>
                        <td>Imagen</td>
                        <td>Fecha</td>
                        <td>Acciones</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($noticias as $noticia)

                    <tr>
                        <td>{{ $noticia->noticia_id }}</td>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ $noticia->sinopsis }}</td>
                        <td><img src="img/{{$noticia->imagen}}" alt="{{$noticia->imagen_descripcion}}"></td>
                        <td style="width: 9rem">{{ $noticia->fecha_publicacion->format('d/ m/ Y') }}</td>
                        <td>
                            <a href="{{ route('noticias.ver.noticia', ['id'=> $noticia->noticia_id])}}" class="btn btn-danger w-100">Leer</a>
    

                            <div><a href="{{ route('noticias.editar.noticia', ['id' => $noticia->noticia_id]) }}" class="btn btn-primary w-100 mt-3">Editar</a></div>
                            <form action="{{ route('noticias.eliminar', ['id'=> $noticia->noticia_id])}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-dark w-100 mt-3">Eliminar</button>
                            </form>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            
        </div>
        @endauth

    </section>
@endsection