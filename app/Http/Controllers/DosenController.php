<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class DosenController extends Controller
{
    public function index(){

        $dosen = Dosen::orderBy('nama')->paginate(10);
        return view('dosen.index', compact('dosen'));
    }

    public function tambahdosen(){
        return view('dosen.tambah');
    }

    public function storedosen(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nip.required' => 'NIP tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_telp.required' => 'No Telp tidak boleh kosong',
        ]);

        Dosen::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        Alert::success('Berhasil', 'Data Dosen Berhasil Ditambahkan');
        return redirect('/dosen');
    }

    public function editdosen($id){
        $dosen = Dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }


}
