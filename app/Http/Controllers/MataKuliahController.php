<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MataKuliahController extends Controller
{

    public function index(){

       
        $matakuliah = DB::table('master_matakuliah')->get()->toArray();
    
     return view('matakuliah.index', compact('matakuliah'));
    }

    public function matkul_pilihan(){
        $matakuliah = DB::table('matkul_pilihan')->get()->toArray();
    
     return view('matakuliah.pilihan', compact('matakuliah'));
    }

   public function inputmatkul(){

    

   }
}
