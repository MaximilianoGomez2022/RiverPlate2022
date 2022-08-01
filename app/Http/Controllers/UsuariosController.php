<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){

    $usuarios = User::all();

        return view ('usuarios/index', [
            'usuarios' => $usuarios,
        ]);
    }

    public function eliminar($id){

        $usuario = User::findOrfail($id);
        $usuario->delete();

    
        return redirect()
        ->route('usuarios.index')
        ->with('messagge.success', 'El usuario <b>' . e($usuario->name) . '</b> ha sido eliminado con éxito !');
        }
}
