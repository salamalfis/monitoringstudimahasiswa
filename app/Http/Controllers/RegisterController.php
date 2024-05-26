<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

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
            'nim' => 'required',
            'emailsso' => 'required|email',
            'kelas' => 'required',
            'emailpribadi' => 'required|email',
            'jeniskelamin' => 'required',
            'notelp' => 'required|number|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nim.required' => 'NIM tidak boleh kosong',
            'kelas.required' => 'Kelas tidak boleh kosong',
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

        $mahasiswa = Mahasiswa::create([
            'nama' => request('nama'),
            'nim' => request('nim'),
            'kelas' => request('kelas'),
            'emailsso' => request('emailsso'),
            'emailpribadi' => request('emailpribadi'),
            'notelp' => request('notelp'),
            'jeniskelamin' => request('jeniskelamin'),
            'password' => request('password'),
        ]);

        Alert::success('Berhasil', 'Registrasi Mahasiswa berhasil');
        return view('login');
    }

    public function storeMahasiswa(Request $request) {

    }

}
