<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view ('register');
    }

    // public function registerProdi() {
    //     return view('registerProdi');
    // }
    public function registerDosenWali() {
        return view('registerDosenWali');
    }
    public function registerMahasiswa() {
        return view('registerMahasiswa');
    }

    // public function storeProdi() {
    //     request()->validate([

    //     ]);
    // }

    public function storeDosenWali(Request $request) {
        request()->validate([
            'nama' => 'required',
            'nim' => 'requires',
            'emailsso' => 'required|email',
            'emailpribadi' => 'required|email',
            'jeniskelamin' => 'required',
            'notelp' => 'required|number|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nim.required' => 'NIM tidak boleh kosong',
            'emailsso.required' => 'Email SSO tidak boleh kosong',
            'emailsso.email' => 'Email SSO harus valid',
            'emailpribadi.required' => 'Email pribadi tidak boleh kosong',
            'emailpribadi.email' => 'Email pribadi harus valid',
            'jeniskelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'notelp.required' => 'No Telepon Harus diisi',
            'notelp.number' => 'No Telepon harus berupa angka',
            'notelp.min' => 'No Telepon minimal harus 8 angka',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal harus 8 karakter',
            'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong',
            'password_confirmation.same' => 'Konfirmasi password harus sama dengan password'

        ]);

        $mahasiswa = 
    }

    public function storeMahasiswa(Request $request) {
        
    }

}
