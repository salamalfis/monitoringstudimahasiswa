<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlasanUndurDiri;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function alasanundurdiri(){
        $alasan = AlasanUndurDiri::all();

        $title = 'Hapus Alasan Undur Diri!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('undurdiri.alasan', compact('alasan'));
    }
    public function tambahalasanundurdiri(){
        return view('undurdiri.tambahalasan');
    }



    public function storealasanundurdiri(Request $request){
        $request->validate([
            'alasan' => 'required|unique:alasanundurdiri,alasan',
        ],
        [
            'alasan.required' => 'Alasan Undur Diri tidak boleh kosong',
            'alasan.unique' => 'Alasan Undur Diri sudah ada',
        ]);

        $alasan = AlasanUndurDiri::create([
            'alasan' => $request->alasan,
        ]);

        Alert::success('Berhasil', 'Data Alasan Undur Diri berhasil disimpan');
        return redirect('/alasan-undur-diri');
    }

    public function editalasan($id){
        $alasan = AlasanUndurDiri::find($id);




        return view('undurdiri.editalasan', compact('alasan'));
    }

    public function updatealasan(Request $request, $id){
        $request->validate([
            'alasan' => 'required|unique:alasanundurdiri,alasan',
        ],
        [
            'alasan.required' => 'Alasan Undur Diri tidak boleh kosong',
            'alasan.unique' => 'Alasan Undur Diri sudah ada',
        ]);

        $alasan = AlasanUndurDiri::find($id);
        $alasan->update([
            'alasan' => $request->alasan,
        ]);

        Alert::success('Berhasil', 'Data Alasan Undur Diri berhasil diubah');
        return redirect('/alasan-undur-diri');
    }

    public function deletealasan($id){
        $alasan = AlasanUndurDiri::find($id);
        $alasan->delete();

        Alert::success('Berhasil', 'Data Alasan Undur Diri berhasil dihapus');
        return redirect('/alasan-undur-diri');
    }
}
