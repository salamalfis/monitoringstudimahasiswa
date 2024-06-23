<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DetailMahasiswa;
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

    public function detailapprovaluser($id){
        $user = User::find($id);

        $title = 'Approve User!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        $detailuser = DetailMahasiswa::where('user_id','==',$id);
        return view('approval.detailuser', compact('user'));
    }
    
    public function approve($id){
        $user = User::find($id);
        $user->active = true;
        $user->save();
        return redirect()->route('approval.index');
    }
}
