<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AngkatanController extends Controller
{
    public function index()
    {
        $angkatan = Angkatan::orderBy('tahun_angkatan')->paginate(10);

        $title = 'Hapus Angkatan!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('angkatan.index', compact('angkatan'));
    }

    public function tambahangkatan()
    {
        return view('angkatan.tambah');
    }

    public function storeangkatan(Request $request)
    {
        $this->validate($request, [
            'angkatan' => 'required|unique:angkatan,tahun_angkatan|numeric',
            'status' => 'required',
        ],[
            'angkatan.required' => 'Tahun angkatan tidak boleh kosong',
            'angkatan.unique' => 'Tahun angkatan sudah ada',
            'angkatan.numeric' => 'Tahun angkatan harus berupa angka',
            'status.required' => 'Status tidak boleh kosong',

        ]);

        Angkatan::create([
            'tahun_angkatan' => $request->angkatan,
            'active' => $request->status,
        ]);

        Alert::success('Berhasil', 'Data Angkatan berhasil ditambahkan');
        return redirect('/angkatan');
    }

    public function editangkatan($id)
    {
        $angkatan = Angkatan::find($id);
        return view('angkatan.edit', compact('angkatan'));
    }

    public function updateangkatan(Request $request, $id)
    {
        $angkatan = Angkatan::find($id);

        $this->validate($request, [
            'angkatan' => 'required|numeric',
            'status' => 'required',
        ],[
            'angkatan.required' => 'Tahun angkatan tidak boleh kosong',
            'angkatan.unique' => 'Tahun angkatan sudah ada',
            'angkatan.numeric' => 'Tahun angkatan harus berupa angka',
            'status.required' => 'Status tidak boleh kosong',


        ]);

        $angkatan->update([
            'tahun_angkatan' => $request->angkatan,
            'active' => $request->status,
        ]);

        Alert::success('Berhasil', 'Data Angkatan berhasil diubah');
        return redirect('/angkatan');
    }

    public function deleteangkatan($id)
    {
        $angkatan = Angkatan::find($id);
        $angkatan->delete();

        Alert::success('Berhasil', 'Data Angkatan berhasil dihapus');
        return redirect('/angkatan');
    }
}
