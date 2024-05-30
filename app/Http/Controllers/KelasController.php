<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function inputkelas()
    {


        request()->validate([
            'kode_kelas' => 'required|max:7|unique:kelas,kode_kelas',
            'nama_kelas' => 'required|max:10|unique:kelas,nama_kelas',
            'angkatan' => 'required|numeric',


        ], [
            'kode_kelas.required' => 'Kode Kelas tidak boleh kosong',
            'nama_kelas.required' => 'Nama Kelas tidak boleh kosong',
            'kode_kelas.max' => 'Kode Kelas maksimal 7 karakter',
            'nama_kelas.max' => 'Nama Kelas maksimal 10 karakter',
            'kode_kelas.unique' => 'Kode Kelas sudah ada',
            'nama_kelas.unique' => 'Nama Kelas sudah ada',
            'angkatan.required' => 'Angkatan tidak boleh kosong',
            'angkatan.numeric' => 'Angkatan harus berupa angka'
        ]);

        $kelas = Kelas::create([
            'kode_kelas' => request('kode_kelas'),
            'nama_kelas' => request('nama_kelas'),
            'angkatan' => request('angkatan'),

        ]);
        Alert::success('Berhasil', 'Data kelas berhasil ditambahkan');
        return redirect('/kelas');

    }
}