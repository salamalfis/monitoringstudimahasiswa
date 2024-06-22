<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\DosenWali;
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
        $kelas = Kelas::all();
        return view('registerDosenWali', compact('kelas'));
    }
    public function registerMahasiswa() {
        $kelas = Kelas::all();
        return view('registerMahasiswa', compact('kelas'));
    }

    // public function storeProdi() {
    //     request()->validate([

    //     ]);
    // }

    public function storeMahasiswa(Request $request) {
        request()->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'emailsso' => 'required|email',
            'kelas' => 'required',
            'emailpribadi' => 'required|email',
            'jeniskelamin' => 'required',
            'notelp' => 'required|numeric|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nim.required' => 'NIM tidak boleh kosong',
            'nim.numeric'=> 'NIM harus berupa angka',
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
            'iduser' => request('nim'),

            'emailsso' => request('emailsso'),
            'emailpribadi' => request('emailpribadi'),
            'notelp' => request('notelp'),
            'jeniskelamin' => request('jeniskelamin'),
            'password' => request('password'),
        ]);

        

        $mahasiswa->assignRole('Mahasiswa');

        Alert::success('Berhasil', 'Registrasi Mahasiswa berhasil');
        return redirect('/');
    }

    public function storeDosenWali(Request $request) {
        request()->validate([
            'nama' => 'required',
            'nip' => 'required|numeric',
            'emailsso' => 'required|email',
            'kelas' => 'required',
            'emailpribadi' => 'required|email',
            'jeniskelamin' => 'required',
            'notelp' => 'required|numeric|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nip.required' => 'NIP tidak boleh kosong',
            'nip.numeric'=> 'NIP harus berupa angka',
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

        $dosenwali = DosenWali::create([
            'nama' => request('nama'),
            'nim/nip' => request('nip'),
            'kelas' => request('kelas'),
            'emailsso' => request('emailsso'),
            'emailpribadi' => request('emailpribadi'),
            'notelp' => request('notelp'),
            'jeniskelamin' => request('jeniskelamin'),
            'password' => request('password'),
        ]);

        Alert::success('Berhasil', 'Registrasi Dosen Wali berhasil');
        return redirect('/');
    }

    public function dosen() {
        return view('dosen.index');
    }

}
