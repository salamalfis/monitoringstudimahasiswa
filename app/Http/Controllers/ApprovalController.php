<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
    public function index(){

        $users = User::all()->where('active', false);


        return view('approval.index', compact('users'));
    }

    public function approvalmetlit(){
        return view('approval.metlit');
    }
    
    public function approvaltugasakhir(){
        return view('approval.tugasakhir');
    }

    public function approvalundurdiri(){
        return view('approval.undurdiri');
    }

    
}
