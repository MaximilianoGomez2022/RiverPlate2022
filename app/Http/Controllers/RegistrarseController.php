<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrarseController extends Controller
{
        public function index(){

            return view ('registrarse/form');

        }

        public function agregarUsuario(Request $request){

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:8',
            ],[
                'name.required' => 'Tenés que ingresar tu nombre',
                'email.required' => 'Tenés que ingresar tu mail',
                'password.required' => 'Tenés que ingresar tu clave',
                'password.min' => 'La clave debe tener al menos 8 caractéres',
            ]);

            $data = $request->all();

            User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->password),
            ]);

            return redirect()
            ->route('registrarse.form')
            ->with('messagge.success', '<b>' . e($data['name']) . '</b> te registraste correctamente');

        }
}
