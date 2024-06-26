<?php

namespace App\Http\Controllers;

use App\Models\TahunAjar;
use Illuminate\Http\Request;

class TahunAjarController extends Controller
{
    public function index(){
        $tahun_ajar = TahunAjar::orderBy('tahun_ajar')->paginate(10);
        return view('tahun_ajar.index', compact('tahun_ajar'));
    }

    public function tambahtahunajar(){
        return view('tahun_ajar.tambah');
    }

    public function storetahunajar(Request $request){
        request()->validate([
            'tahun_ajar' => 'required'
        ], [
            'tahun_ajar.required' => 'Tahun Ajaran harus diisi'
        ]);
        return redirect('/tahun-ajar');
    }

    public function edittahunajar($id){
        $tahun_ajar = TahunAjar::find($id);
        return view('tahun_ajar.edit', compact('tahun_ajar'));
    }

    public function updatetahunajar(Request $request, $id){
        request()->validate([
            'tahun_ajar' => 'required'
        ], [
            'tahun_ajar.required' => 'Tahun Ajaran harus diisi'
        ]);
        return redirect('/tahun-ajar');
    }

    public function deletetahunajar($id){
        $tahun_ajar = TahunAjar::find($id);
        $tahun_ajar->delete();
        return redirect('/tahun-ajar');
    }
}
