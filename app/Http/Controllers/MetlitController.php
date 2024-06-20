<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetlitController extends Controller
{
    public function index()
    {
        return view('metlit.index');
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
