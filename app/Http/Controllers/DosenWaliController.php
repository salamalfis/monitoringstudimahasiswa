<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DosenWali;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DosenWaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosenWali = DosenWali::all();
        $kelas = Kelas::all();
        return view('dosenwali.index', compact('dosenWali', 'kelas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function inputdosenwali()
    {

            request()->validate([
                'nama' => 'required',
                'nip' => 'required|numeric|min:10|unique:dosenwali,nip',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'kodedosen' => 'required|min:3|max:4',
                'kelaswali' => 'required|min:6|max:9',
                'angkatan' => 'required|min:4|max:4',

            ], [
                'nama.required' => 'Nama tidak boleh kosong',
                'nip.required' => 'NIP tidak boleh kosong',
                'nip.numeric' => 'NIP harus berupa angka',
                'nip.unique' => 'NIP sudah terdaftar',
                'nip.min' => 'NIP minimal 10 karakter',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 8 karakter',
                'kodedosen.required' => 'Kode dosen tidak boleh kosong',
                'kodedosen.min' => 'Kode dosen minimal 3 karakter',
                'kodedosen.max' => 'Kode dosen maksimal 4 karakter',
                'kelaswali.required' => 'Kelas wali tidak boleh kosong',
                'kelaswali.min' => 'Kelas wali minimal 6 karakter',
                'kelaswali.max' => 'Kelas wali maksimal 9 karakter',
                'angkatan.min' => 'Angkatan minimal 4 karakter',
                'angkatan.max' => 'Angkatan maksimal 4 karakter',
                'angkatan.required' => 'Angkatan tidak boleh kosong',
            ]);

            $uid = $this->uid();


            $user = User::create([
                'id' => $uid,
                'name' => request('nama'),
                'email' =>request('email'),
                'password' => Hash::make(request('password')),
            ]);

            if ($user) {


                $dosenWali= DosenWali::create([
                    'id' => $uid,
                    'nip' => request('nip'),
                    'kodedosen' => request('kodedosen'),
                    'kelaswali' => request('kelaswali'),
                    'angkatan' => request('angkatan'),
            ]);

                if (!$dosenWali) {
                    $user->delete($uid);
                    Alert::error('Gagal', 'Gagal menambahkan dosen wali');
                    return redirect()->back();
                }

                else {
                    Alert::success('Berhasil', 'Berhasil menambahkan dosen wali');
                    return redirect('/dosenwali');
                }
            }
            else{

                Alert::error('Gagal', 'Gagal menambahkan dosen wali');
                return redirect()->back();
            }

        }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DosenWali $dosenWali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DosenWali $dosenWali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DosenWali $dosenWali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DosenWali $dosenWali)
    {
        //
    }
}
