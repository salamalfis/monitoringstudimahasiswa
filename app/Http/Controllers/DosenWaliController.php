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
}