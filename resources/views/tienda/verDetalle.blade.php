<?php
/** @var \App\Models\Producto[] | $producto */
?>

@extends('layouts.main')

@section('title', 'detalle de ' . e($producto->nombre) )

@section('main')
<main> 
    <section class="container mb-5" id="sec-tienda">
        <h1>{{$producto->nombre}}</h1>
        <div class="row">
        <div class="col-md-6" >
        <img class="card-img-top" src="../img/{{$producto->imagen}}" alt="{{ $producto->imagen_descripcion }}">
        </div>

        <div class="col-md-6">
            <div class="card-body">
            <p class="card-text">$ {{ $producto->precio}} </p>
            @if ($producto->talles->count() > 0)
            
            <p class="card-text"> Talles Disponibles @foreach ($producto->talles as $talle )
            {{ $talle->nombre }} @endforeach</p>
            
            @endif
            <p>{{ $producto->descripcion}}</p>
            <a href="#" class="btn btn-danger">Agregar al carrito</a>
            <img src="../img/tarjetas.jpg" alt="Podés pagar con tarjeta Visa, MaterCard, American Express, Dinners Club"/>
            </div>
        </div>
   
    </section>
</main>
@endsection