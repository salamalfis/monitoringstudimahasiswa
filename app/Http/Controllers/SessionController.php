<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function Ramsey\Uuid\v1;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter'
        ]);


        if (auth()->attempt($data)) {
            Alert::success('Selamat Datang', 'Anda berhasil login');
            return view('dashboard');
        } else {
            Alert::error('Password atau email salah','Silahkan coba lagi');
            return back();
        }
    }
    function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
