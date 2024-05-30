<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
    public function index(){
        
        $users=  DB::table('users')->where('active', false)->get();
        
        return view('approval.index', compact('users'));
    }
}
