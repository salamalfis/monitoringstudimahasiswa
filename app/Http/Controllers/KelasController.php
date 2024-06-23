<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Angkatan;
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

    public function tambahkelas()
    {
        $angkatan = Angkatan::orderBy('tahun_angkatan')->get();
        return view('kelas.tambah', compact('angkatan'));
    }

    public function storekelas(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:kelas',
            'nama' => 'required',
            'angkatan_id' => 'required',
            'kapasitas' => 'required|numeric|min:1',
            'status' => 'required'
        ],[
            'kode.required' => 'Kode kelas tidak boleh kosong',
            'kode.unique' => 'Kode kelas sudah ada',
            'nama.required' => 'Nama kelas tidak boleh kosong',
            'angkatan_id.required' => 'Angkatan tidak boleh kosong',
            'kapasitas.required' => 'Kapasitas kelas tidak boleh kosong',
            'kapasitas.numeric' => 'Kapasitas kelas harus berupa angka',
            'kapasitas.min' => 'Kapasitas kelas minimal 1',
            'status.required' => 'Status kelas tidak boleh kosong'

        
        ]);

        Kelas::create([
            
        ]);

        Alert::success('Berhasil', 'Kelas berhasil ditambahkan');
        return redirect()->route('kelas.index');
    }
}