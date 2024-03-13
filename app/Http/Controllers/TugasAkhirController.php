<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    public function index()
    {
        return view('tugasakhir.index');
    }
}
