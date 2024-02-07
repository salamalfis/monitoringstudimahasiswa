<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index');
    }

    public function registermahasiswa()
    {
        request()->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'jurusan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'password' => 'required|min:8'
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nim.required' => 'NIM tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'jurusan.required' => 'Jurusan tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_hp.required' => 'No HP tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        $user = User::create([
            'name' => request('nama'),
            'email' =>request('email'),
            'password' => Hash::make(request('password')),
        ]);
        $mahasiswa= $user->mahasiswa()->create([
            'nim' => request('nim'),
            'jurusan' => request('jurusan'),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
        ]);

    }


}
