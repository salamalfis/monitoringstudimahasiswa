<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngkatanController extends Controller
{
    public function index()
    {
        return view('angkatan.index');
    }
}
