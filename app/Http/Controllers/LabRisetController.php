<?php

namespace App\Http\Controllers;

use App\Models\LabRiset;
use App\Models\Peminatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LabRisetController extends Controller
{
   
    public function index()
    {
        $labriset = LabRiset::all();
        $peminatan = Peminatan::all();

        $title = 'Hapus Lab Riset!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('labriset.index', compact('labriset', 'peminatan'));
    }

    public function tambahlabriset()
    {
        $peminatan = Peminatan::all();
        return view('labriset.tambah',compact('peminatan'));
    }

    public function storelabriset(Request $request)
    {
        $request->validate([
            'nama_lab' => 'required',
            'kode_lab' => 'required',
            'peminatan_id' => 'required',
            'status' => 'required',
            
        ],[
            'nama_lab.required' => 'Nama Lab tidak boleh kosong',
            'kode_lab.required' => 'Kode Lab tidak boleh kosong',
            'peminatan_id.required' => 'Peminatan tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
        ]);

        $labriset =  LabRiset::create([
            'nama_labriset' => $request->nama_lab,
            'kode_labriset' => $request->kode_lab,
            'peminatan_id' => $request->peminatan_id,
            'active' => $request->status,
        ]);
        

        Alert::success('Success', 'Data Lab Riset Berhasil Ditambahkan');
        return redirect('/lab-riset');
    }

    public function editlabriset($id)
    {
        $labriset = LabRiset::find($id);
        $peminatan = Peminatan::all();
        return view('labriset.edit', compact('labriset', 'peminatan'));
    }

    public function updatelabriset(Request $request, $id)
    {
        $request->validate([
            'nama_lab' => 'required',
            'kode_lab' => 'required',
            'peminatan_id' => 'required',
            'status' => 'required',
            
        ],[
            'nama_lab.required' => 'Nama Lab tidak boleh kosong',
            'kode_lab.required' => 'Kode Lab tidak boleh kosong',
            'peminatan_id.required' => 'Peminatan tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
        ]);

        $labriset = LabRiset::find($id);
        $labriset->nama_labriset = $request->nama_lab;
        $labriset->kode_labriset = $request->kode_lab;
        $labriset->peminatan_id = $request->peminatan_id;
        $labriset->active = $request->status;
        $labriset->save();

        Alert::success('Success', 'Data Lab Riset Berhasil Diubah');
        return redirect('/lab-riset');
    }

    public function deletelabriset($id)
    {
        $labriset = LabRiset::find($id);
        $labriset->delete();

        Alert::success('Success', 'Data Lab Riset Berhasil Dihapus');
        return redirect('/lab-riset');
    }
}