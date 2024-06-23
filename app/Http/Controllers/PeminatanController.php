<?php

namespace App\Http\Controllers;

use App\Models\Peminatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PeminatanController extends Controller
{
    public function index()
    {
        $peminatan = Peminatan::orderBy('kode_peminatan')->get();

        $title = 'Hapus Peminatan!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('peminatan.index', compact('peminatan'));
    }

    public function tambahpeminatan()
    {
        return view('peminatan.tambah');
    }

    public function storepeminatan(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:peminatan,kode_peminatan',
            'nama' => 'required',
            'status' => 'required'
        ],[
            'kode.required' => 'Kode peminatan tidak boleh kosong',
            'kode.unique' => 'Kode peminatan sudah ada',
            'nama.required' => 'Nama peminatan tidak boleh kosong',
            'status.required' => 'Status peminatan tidak boleh kosong'
        ]);

        Peminatan::create([
            'nama_peminatan' => $request->nama,
            'kode_peminatan' => $request->kode,
            'active' => $request->status
        ]);
        Alert::success('Berhasil', 'Data peminatan berhasil ditambahkan');
        return redirect('/peminatan');
    }

    public function editpeminatan($id)
    {
        $peminatan = Peminatan::find($id);

        return view('peminatan.edit', compact('peminatan'));
    }

    public function updatepeminatan(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|unique:peminatan,kode_peminatan,'.$id,
            'nama' => 'required',
            'status' => 'required'
        ],[
            'kode.required' => 'Kode peminatan tidak boleh kosong',
            'kode.unique' => 'Kode peminatan sudah ada',
            'nama.required' => 'Nama peminatan tidak boleh kosong',
            'status.required' => 'Status peminatan tidak boleh kosong'
        ]);

        Peminatan::where('id', $id)->update([
            'nama_peminatan' => $request->nama,
            'kode_peminatan' => $request->kode,
            'active' => $request->status
        ]);

        Alert::success('Berhasil', 'Data peminatan berhasil diubah');
        return redirect('/peminatan');
    }

    public function deletepeminatan($id)
    {
        Peminatan::destroy($id);

        Alert::success('Berhasil', 'Data peminatan berhasil dihapus');
        return redirect('/peminatan');
    }

}
