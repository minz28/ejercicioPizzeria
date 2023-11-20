<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginGet(Request $request){
        if(count($request->old()) > 0){
            $usuario = new User($request->old());
        }else{
            $usuario = new User();
        }

        return view('login', ['usuario' => $usuario]);
    }

    public function loginPost(Request $request){
        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();

            return redirect()->intended('/solicitudes');
        }

        return back()->withErrors([
            'email' => 'Las credenciales ingresadas no coinciden con nuestros registros.'
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
