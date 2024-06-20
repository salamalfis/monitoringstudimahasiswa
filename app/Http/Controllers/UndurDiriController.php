<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UndurDiriController extends Controller
{
    public function index(){
        return view('undurdiri.index');
    }

    public function inputundurdiri(){
        return view('undurdiri.inputundur');
    }

    public function approvalundur(){
        return view('undurdiri.approval');
    }
}
