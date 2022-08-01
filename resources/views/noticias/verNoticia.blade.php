<?php
/** @var \App\Models\Noticia[] | $noticia */
?>

@extends('layouts.main')

@section('title', 'Leer ' . e($noticia->titulo) )

@section('main')
<main>
    <section class="container" id="leer-noticia">
        <div class="row">
                <article class="col-md-9">
                    <div class="">
                        <h1>{{$noticia->titulo}}</h1>
                        <p>Fecha de Publicación : {{$noticia->fecha_publicacion->format('d / m / Y')}}</p>
                    </div>
                    <figure id="contenedor-img-noticia">
                        <img src="../img/{{$noticia->imagen}}" alt="{{ $noticia->imagen_descripcion }}"/>
                    </figure>
                    <p>{{$noticia->texto}}</p>
                </article>
                <div class="col-md-3" id="publicidad-leer-noticia">
                    <img src="../img/ponzio-vert.jpg" alt="Publicidad Ponzio" srcset="">
                    <img src="../img/img-form.jpg" alt="Cuadro de River">
                </div>
        </div>
    </section>
    </main
@endsection