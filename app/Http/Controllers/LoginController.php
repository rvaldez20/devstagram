<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }

        // significa que la auth es correcta y puede acceder al muro
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('posts.index');
    }
}
