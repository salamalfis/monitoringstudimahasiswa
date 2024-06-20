<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all()->sortBy('nama');
        $kelas = Kelas::all()->sortBy('nama');
        return view('mahasiswa.index',compact('mahasiswa','kelas'));
    }
}
