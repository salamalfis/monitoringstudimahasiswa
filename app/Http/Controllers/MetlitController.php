<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MetlitController extends Controller
{
    public function index()
    {
        $anggota = User::all();
        return view('metlit.index',compact('anggota'));
    }
    public function bimbinganmetlit()
    {
        return view('metlit.bimbingan');
    }
    public function pilihtopikmetlit()
    {
        return view('metlit.pilih');
    }
    public function progressmetlit()
    {
        return view('metlit.progress');
    }
    public function topikmetlit()
    {
        return view('metlit.topik');
    }


}
