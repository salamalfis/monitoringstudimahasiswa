<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Traits\GenUid;
use App\Models\DosenWali;
use App\Models\Mahasiswa;
use App\Models\DetailDosen;
use App\Models\DetailProdi;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use App\Models\DetailMahasiswa;
use Illuminate\Support\Facades\App;
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



    public function storeMahasiswa(Request $request) {
        request()->validate([
            'nama' => 'required',
            'iduser' => 'required|numeric|unique:users,iduser',
            'emailsso' => 'required|email|unique:users,emailsso',
            'emailpribadi' => 'required|email|unique:users,emailpribadi',
            'kelas' => 'required',
          
            'notelp' => 'required|numeric|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'iduser.required' => 'NIM tidak boleh kosong',
            'iduser.numeric'=> 'NIM harus berupa angka',
            'iduser.unique' => 'NIM sudah terdaftar',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'emailsso.required' => 'Email SSO tidak boleh kosong',
            'emailsso.email' => 'Email SSO harus valid',
            'emailsso.unique' => 'Email SSO sudah terdaftar',
            'emailpribadi.unique' => 'Email pribadi sudah terdaftar',

            'emailpribadi.required' => 'Email pribadi tidak boleh kosong',
            'emailpribadi.email' => 'Email pribadi harus valid',
   
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
            'iduser' => request('iduser'),
            'emailsso' => request('emailsso'),
            'emailpribadi' => request('emailpribadi'),
            'notelp' => request('notelp'),
            'password' => request('password'),
        ]);

        if(!$mahasiswa){
            App::abort(500, 'Error');
        }else{
          $detailmahasiswa = DetailMahasiswa::create([
            'kelas_id' => request('kelas'),
            'user_id' => $mahasiswa->id,
          ]);

          if(!$detailmahasiswa){
            $mahasiswa = User::find($mahasiswa->id);
            $mahasiswa->delete();
            App::abort(500, 'Error');
          }
          else{
            $user = User::find($mahasiswa->id);
            $user->assignRole('Mahasiswa');
            Alert::success('Berhasil', 'Registrasi Mahasiswa berhasil');
            return redirect('/');
          } 
        }
    }

    public function storeDosenWali(Request $request) {
        request()->validate([
            'nama' => 'required',
            'nip' => 'required|numeric',
            'emailsso' => 'required|email|unique:users,emailsso',
            'emailpribadi' => 'required|email|unique:users,emailpribadi',
            'kelas' => 'required',
            'notelp' => 'required|numeric|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nip.required' => 'NIP tidak boleh kosong',
            'nip.numeric'=> 'NIP harus berupa angka',
            'emailsso.required' => 'Email SSO tidak boleh kosong',
            'emailsso.email' => 'Email SSO harus valid',
            'emailsso.unique' => 'Email SSO sudah terdaftar',
            'emailpribadi.unique' => 'Email pribadi sudah terdaftar',
            'emailpribadi.required' => 'Email pribadi tidak boleh kosong',
            'emailpribadi.email' => 'Email pribadi harus valid',
            'kelas.required' => 'Kelas tidak boleh kosong',
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
            'iduser' => request('nip'),
            'kelas' => request('kelas'),
            'emailsso' => request('emailsso'),
            'emailpribadi' => request('emailpribadi'),
            'notelp' => request('notelp'),
            'jeniskelamin' => request('jeniskelamin'),
            'password' => request('password'),
        ]);

        if(!$dosenwali){
            App::abort(500, 'Error');
        }else{
            $detaildosen = DetailDosen::create([
                'kelas_id' => request('kelas'),
                'user_id' => $dosenwali->id,
            ]);
    
            if(!$detaildosen){
                $dosenwali = User::find($dosenwali->id);
                $dosenwali->delete();
                App::abort(500, 'Error');
            }
            else{
                $user = User::find($dosenwali->id);
                $user->assignRole('Dosen Wali');

                Alert::success('Berhasil', 'Registrasi Dosen Wali berhasil');
                return redirect('/');
            }  
        }
    }

    public function storeProdi(Request $request) {
        request()->validate([
            'nama' => 'required',
            'iduser' => 'required|numeric',
            'emailsso' => 'required|email|unique:users,emailsso',
            'emailpribadi' => 'required|email|unique:users,emailpribadi',
            'notelp' => 'required|numeric|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'iduser.required' => 'NIP tidak boleh kosong',
            'iduser.numeric'=> 'NIP harus berupa angka',
            'emailsso.required' => 'Email SSO tidak boleh kosong',
            'emailsso.email' => 'Email SSO harus valid',
            'emailsso.unique' => 'Email SSO sudah terdaftar',
            'emailpribadi.unique' => 'Email pribadi sudah terdaftar',
            'emailpribadi.required' => 'Email pribadi tidak boleh kosong',
            'emailpribadi.email' => 'Email pribadi harus valid',
            'notelp.required' => 'No Telepon Harus diisi',
            'notelp.number' => 'No Telepon harus berupa angka',
            'notelp.min' => 'No Telepon minimal harus 8 angka',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal harus 8 karakter',
            'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong',
            'password_confirmation.same' => 'Konfirmasi password harus sama dengan password'
        ]);

        $prodi = ProgramStudi::create([
            'nama' => request('nama'),
            'iduser' => request('iduser'),
            'emailsso' => request('emailsso'),
            'emailpribadi' => request('emailpribadi'),
            'notelp' => request('notelp'),
            'password' => request('password'),
        ]);

        if(!$prodi){
            App::abort(500, 'Error');
        }else{

            $detailprodi = DetailProdi::create([
                'jabatan' => request('jabatan'),
                'user_id' => $prodi->id,
            ]);

            if(!$detailprodi){
                $prodi = User::find($prodi->id);
                $prodi->delete();
                App::abort(500, 'Error');
            }
            else{
            $user = User::find($prodi->id);
            $user->assignRole('Program Studi');
            Alert::success('Berhasil', 'Registrasi Prodi berhasil');
            return redirect('/');
            }

        }
    }
}
