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

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function registermahasiswa()
    {
        request()->validate([
            'nama' => 'required',
            'nim' => 'required|numeric|min:10|max:10|unique:nim',
            'email' => 'required|email',
            'jurusan' => 'required',
            'kelas' => 'required',
            'angkatan' => 'required',
            'password' => 'required|min:8'
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nim.required' => 'NIM tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'jurusan.required' => 'Jurusan tidak boleh kosong',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'angkatan.required' => 'Angkatan tidak boleh kosong',
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
            'kelas' => request('kelas'),
            'angkatan' => request('angkatan'),

        ]);

    }


}
