<?php
/** @var \App\Models\Producto[] | Illuminate\Database\Eloquent\Collection $productos */
/** @var \App\Models\Categoria[] | Illuminate\Database\Eloquent\Collection $categorias */
?>

@extends('layouts.main')

@section('title', 'Productos')

@section('main')



    <section class="container mb-5">

        <div class="titulo">
            <h1 class="mt-5">Productos</h1>
        </div>

        <div class="filtros row d-flex justify-content-around mb-5">
            @foreach ($categorias as $categoria)
            <div class="col-md-4 text-center">
                <a class="btn btn-dark w-100" href="{{ route('tienda.categoria', ['categoria_id'=> $categoria->categoria_id ])}}">{{ $categoria->nombre }}</a>            
            </div>  
            @endforeach
        </div>

        
        @auth
        <div class="mb-5">
        <a class="btn btn-danger" href="{{route('tienda.agregar.form')}}">+ Agregar un producto</a>
        </div>
        @endauth

    <div>
        <div class="row d-flex justify-content-around align-items-end">      
            @foreach ($productos as $producto)
            <div class="card col-sm-3 me-4 mb-5" style="width: 18rem;">
            <img class="card-img-top" src="../../img/{{$producto->imagen}}" alt="{{$producto->imagen_descripcion}}">
            <div class="card-body">
                <div>
                    <h2 class="card-title">{{$producto->nombre}}</h2>
                </div>   
                <p class="card-text" style="font-size: 1.2rem;"><b>$ {{$producto->precio}}</b></p>
                @if ($producto->talles->count() > 0)
            
                <p class="card-text"> Talles Disponibles @foreach ($producto->talles as $talle )
                {{ $talle->nombre }} @endforeach</p>
                
                @endif
                <p class="card-text"><u>{{$producto->categoria->nombre}}</u></p>
                <a href="{{ route('tienda.verDetalle', ['id'=> $producto->producto_id])}}" class="btn btn-danger w-100">Ver detalle</a>
    
                @auth
                <div><a href="{{ route('tienda.editar.form', ['id' => $producto->producto_id]) }}" class="btn btn-primary w-100 mt-3">Editar</a></div>
                <div>
                    <form action="{{ route('tienda.eliminar', ['id'=> $producto->producto_id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-dark w-100 mt-3">Eliminar</button>
                    </form>
                </div>
                @endauth
            </div>
            </div>
            @endforeach
            </div>
    </div>
        
    </section>
@endsection