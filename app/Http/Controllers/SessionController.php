<?php

namespace App\Http\Controllers;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function dashboard()
    {
        return view('dashboard');
    }

    function login()
    {
        $data = request()->validate([
            'idUser' => 'required|numeric',
            'password' => 'required|min:8',


        ], [
            'idUser.required' => 'Nim/Nip tidak boleh kosong',
            'idUser.numeric' => 'Nim/Nip harus berupa angka',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter'
        ]);


        if (Auth::attempt($data)) {

            $is_active = Auth::user()->active;

            if (!$is_active == true)
            {
                Auth::logout();
                Alert::error('Akun anda belum aktif','Silahkan menghubungi Prodi');
                return redirect('/');
            }
            else{
                session()->regenerate();
                Alert::success('Selamat Datang', 'Anda berhasil login');
                return redirect('/dashboard');
            }
        }
        else {
            Alert::error('Nim/Nip atau Password salah','Silahkan coba lagi');
            return back();
        }
    }
    function logout()
    {
        Auth::logout();
        Alert::success('Berhasil', 'Anda berhasil logout');
        return redirect('/');

    }
}
