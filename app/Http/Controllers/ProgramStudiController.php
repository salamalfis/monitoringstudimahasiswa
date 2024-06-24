<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function index()
    {
        $prodi = User::role('Program Studi')->get();
        return view('prodi.index', compact('prodi'));
    }

    public function tambahprogramstudi()
    {
        return view('prodi.tambah');
    }
}
