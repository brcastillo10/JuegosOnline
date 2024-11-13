<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>['required','email','string'],
            'password'=>['required', 'string']
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerateToken();
            return redirect('app')->with('Inicio de Sesion Exitoso!');
        }
//    return redirect('login');
        throw ValidationException::withMessages([
            'email' => 'Este correo electrónico no coincide con nuestros registros',
            'password' => 'La contraseña es incorrecta'
        ]);
    }

    public function logout(Request $request,Redirector $redirector)
    {
        Auth::logout();

        $request->session()->invalidate(); #Va a invalidar la sesión

        $request->session()->regenerateToken(); #Va a regenerar el toke CSFR

        return $redirector->to('/login');
    }
}
