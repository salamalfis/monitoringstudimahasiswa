<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\GenUid;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    use GenUid;

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
            'nim' => 'required|numeric|min:10|unique:mahasiswa,nim',
            'email' => 'required|email|unique:users,email',
            'dosenwali' => 'required',
            'kelas' => 'required|min:8|max:9',
            'angkatan' => 'required|min:4|max:4',
            'password' => 'required|min:8',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nim.required' => 'NIM tidak boleh kosong',
            'nim.numeric' => 'NIM harus berupa angka',
            'nim.unique' => 'NIM sudah terdaftar',
            'nim.min' => 'NIM minimal 10 karakter',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'dosenwali.required' => 'Dosen wali tidak boleh kosong',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'kelas.min' => 'Kelas minimal 8 karakter',
            'kelas.max' => 'Kelas maksimal 9 karakter',
            'angkatan.min' => 'Angkatan minimal 4 karakter',
            'angkatan.max' => 'Angkatan maksimal 4 karakter',
            'angkatan.required' => 'Angkatan tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $uid = $this->uid();


        $user = User::create([
            'id' => $uid,
            'name' => request('nama'),
            'email' =>request('email'),
            'password' => Hash::make(request('password')),
        ]);

        if ($user) {
            $mahasiswa=Mahasiswa::create([
                'id' => $uid,
                'nim' => request('nim'),
                'angkatan' => request('angkatan'),
                'kelas' => request('kelas'),
                'dosenwali' => request('dosenwali'),

        ]);
        Alert::success('Berhasil', 'Mahasiswa berhasil ditambahkan');
        return redirect('/mahasiswa');
        }
        else{

            Alert::error('Gagal', 'Gagal menambahkan mahasiswa');
            return redirect()->back();


        }

    }
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }




}
