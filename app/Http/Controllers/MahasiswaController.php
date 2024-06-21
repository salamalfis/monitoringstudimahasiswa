<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = User::role('Mahasiswa')->get();
        $kelas = Kelas::all()->sortBy('nama');
        return view('mahasiswa.index',compact('mahasiswa','kelas'));
    }
}
