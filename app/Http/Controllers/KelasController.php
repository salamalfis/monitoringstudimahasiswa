<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::orderBy('kode_kelas')->get();
        $angkatan = Angkatan::all();

        $title = 'Hapus Kelas!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('kelas.index', compact('kelas', 'angkatan'));
    }

    public function tambahkelas()
    {
        $angkatan = Angkatan::orderBy('tahun_angkatan')->get();

        return view('kelas.tambah', compact('angkatan'));
    }

    public function storekelas(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:kelas,kode_kelas',
            'nama' => 'required',
            'angkatan' => 'required',
            'kapasitas' => 'required|numeric|min:1',
            'status' => 'required'
        ],[
            'kode.required' => 'Kode kelas tidak boleh kosong',
            'kode.unique' => 'Kode kelas sudah ada',
            'nama.required' => 'Nama kelas tidak boleh kosong',
            'angkatan.required' => 'Angkatan tidak boleh kosong',
            'kapasitas.required' => 'Kapasitas kelas tidak boleh kosong',
            'kapasitas.numeric' => 'Kapasitas kelas harus berupa angka',
            'kapasitas.min' => 'Kapasitas kelas minimal 1',
            'status.required' => 'Status kelas tidak boleh kosong'


        ]);

        Kelas::create([
            'nama_kelas' => $request->nama,
            'kode_kelas' => $request->kode,
            'angkatan_id' => $request->angkatan,
            'kapasitas' => $request->kapasitas,
            'active' => $request->status

        ]);

        Alert::success('Berhasil', 'Kelas berhasil ditambahkan');
        return redirect('/kelas');
    }


    public function editkelas($id)
    {
        $kelas = Kelas::find($id);
        $angkatan = Angkatan::orderBy('tahun_angkatan')->get();

        $title = 'Hapus Kelas!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('kelas.edit', compact('kelas', 'angkatan'));
    }

    public function updatekelas(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|unique:kelas,kode_kelas,'.$id,
            'nama' => 'required',
            'angkatan' => 'required',
            'kapasitas' => 'required|numeric|min:1',
            'status' => 'required'
        ],[
            'kode.required' => 'Kode kelas tidak boleh kosong',
            'kode.unique' => 'Kode kelas sudah ada',
            'nama.required' => 'Nama kelas tidak boleh kosong',
            'angkatan.required' => 'Angkatan tidak boleh kosong',
            'kapasitas.required' => 'Kapasitas kelas tidak boleh kosong',
            'kapasitas.numeric' => 'Kapasitas kelas harus berupa angka',
            'kapasitas.min' => 'Kapasitas kelas minimal 1',
            'status.required' => 'Status kelas tidak boleh kosong'
        ]);

        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->nama;
        $kelas->kode_kelas = $request->kode;
        $kelas->angkatan_id = $request->angkatan;
        $kelas->kapasitas = $request->kapasitas;
        $kelas->active = $request->status;
        $kelas->save();

        Alert::success('Berhasil', 'Kelas berhasil diubah');
        return redirect('/kelas');
    }

    public function destroykelas($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        Alert::success('Berhasil', 'Kelas berhasil dihapus');
        return redirect('/kelas');
    }
}
