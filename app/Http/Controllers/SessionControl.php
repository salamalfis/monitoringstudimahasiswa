<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionControl extends Controller
{
    function index()
    {
        return view('session');
    }

    function login()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt($data)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }
    }
}
