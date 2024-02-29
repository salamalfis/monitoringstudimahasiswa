<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\MataKuliahPilihan;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MataKuliahController extends Controller
{

    public function index(){


        $matakuliah = DB::table('master_matakuliah')->get()->toArray();

     return view('matakuliah.index', compact('matakuliah'));
    }

    public function matkul_pilihan(){
        $matakuliah = DB::table('matkul_pilihan')->get()->toArray();

     return view('matakuliah.pilihan', compact('matakuliah'));
    }

   public function inputmatkul(){

    request()->validate([
          'kategori' => 'required',
          'kode' => 'required|max:6|min:6|unique:master_matakuliah,kode',
          'namamatakuliah' => 'required',
          'namamatakuliahenglish' => 'required',
          'sks' => 'required|numeric|min:1',
          'semester' => 'required|numeric|min:1',

    ],[
        'kategori.required' => 'Kategori tidak boleh kosong',
        'kode.required' => 'Kode tidak boleh kosong',
        'kode.min' => 'Kode harus 6 karakter',
        'kode.max' => 'Kode harus 6 karakter',
        'kode.unique' => 'Kode Mata Kuliah sudah terdaftar',
        'namamatakuliah.required' => 'Nama Matakuliah tidak boleh kosong',
        'namamatakuliahenglish.required' => 'Nama Matakuliah English tidak boleh kosong',
        'sks.required' => 'SKS tidak boleh kosong',
        'sks.numeric' => 'SKS harus angka',
        'semester.required' => 'Semester tidak boleh kosong',
        'semester.numeric' => 'Semester harus angka',

    ]);

    $inputmatkul = MataKuliah::create([
        'kategori' => request('kategori'),
        'kode' => request('kode'),
        'namamatakuliah' => request('namamatakuliah'),
        'namamatakuliahenglish' => request('namamatakuliahenglish'),
        'sks' => request('sks'),
        'semester' => request('semester'),
    ]);
    Alert::success('Berhasil', 'Mata Kuliah berhasil ditambahkan');
    return redirect('/mata-kuliah');

   }

    public function inputmatkulpilihan(){

     request()->validate([
        'kategori' => 'required',
        'kode' => 'required|max:6|min:6',
        'namamatakuliah' => 'required',
        'namamatakuliahenglish' => 'required',
        'sks' => 'required|numeric|min:1|max:2',
        'semester' => 'required|numeric|min:1|max:2',

     ],[
        'kategori.required' => 'Kategori tidak boleh kosong',
        'kode.required' => 'Kode tidak boleh kosong',
        'kode.min' => 'Kode harus 6 karakter',
        'kode.max' => 'Kode harus 6 karakter',
        'namamatakuliah.required' => 'Nama Matakuliah tidak boleh kosong',
        'namamatakuliahenglish.required' => 'Nama Matakuliah English tidak boleh kosong',
        'sks.required' => 'SKS tidak boleh kosong',
        'sks.numeric' => 'SKS harus angka',
        'sks.min' => 'SKS minimal 1',
        'sks.max' => 'SKS maksimal 2',
        'semester.required' => 'Semester tidak boleh kosong',
        'semester.numeric' => 'Semester harus angka',
        'semester.min' => 'Semester minimal 1',
        'semester.max' => 'Semester maksimal 2',
     ]);

     $inputmatkul = MataKuliahPilihan::create([
        'kategori' => request('kategori'),
        'kode' => request('kode'),
        'namamatakuliah' => request('namamatakuliah'),
        'namamatakuliahenglish' => request('namamatakuliahenglish'),
        'sks' => request('sks'),
        'semester' => request('semester'),
     ]);
     Alert::success('Berhasil', 'Mata Kuliah Pilihan berhasil ditambahkan');
     return redirect('/mata-kuliah-pilihan');
    }

}
