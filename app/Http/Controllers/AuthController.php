<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function loginForm() {
        return view('auth.login');
    }

    public function loginEjecutar(Request $request) {
        
        $credenciales = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(!Auth::attempt($credenciales)) {
            return redirect()
                ->route('auth.login.form')
                ->with('messagge.error', 'Las credenciales ingresadas no coinciden, Intentá nuevamente.')
                ->withInput();
        }

        return redirect()
        ->route('tienda.index')
        ->with('messagge.success', 'Ingresaste correctamente. Bienvenido !');
    }

    public function logout() {
        Auth::logout();

        return redirect()
        ->route('auth.login.form')
        ->with('messagge.success', 'Cerraste sesión correctamente.');
    }

}
