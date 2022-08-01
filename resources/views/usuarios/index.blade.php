<?php
/** @var \App\Models\User[] | Illuminate\Database\Eloquent\Collection $usuarios */
?>

@extends('layouts.main')

@section('title', 'Lista de Usuarios')

@section('main')
    <section class="container mb-5">
        <h1 class="mt-5">Listado de usuarios registrados</h1>

        <div class="row justify-content-center form-edit">

            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre de Usuario</td>
                        <td>Email</td>
                        <td>Acciones</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($usuarios as $usuario)

                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <form action="{{ route('usuarios.eliminar', ['id'=> $usuario->id])}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger w-70 mt-3">Eliminar</button></form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            
        </div>
    </section>
@endsection