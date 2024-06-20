<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    public function index()
    {
        return view('tugasakhir.index');
    }
    public function bimbingantugasakhir()
    {
        return view('tugasakhir.bimbingan');
    }
    public function progresstugasakhir()
    {
        return view('tugasakhir.progress');
    }
    public function topiktugasakhir()
    {
        return view('tugasakhir.topik');
    }


}
