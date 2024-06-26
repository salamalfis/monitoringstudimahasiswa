<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DetailProdi;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramStudiController extends Controller
{
    public function index()
    {
        $prodi = User::role('Program Studi')->orderBy('nama')->paginate(10);
        $jabatan = DetailProdi::all();
        return view('prodi.index', compact('prodi', 'jabatan'));
    }

    public function tambahprogramstudi()
    {
        return view('prodi.tambah');
    }

    public function editprogramstudi($id)
    {
        $prodi = User::find($id);
        $jabatan = DetailProdi::where('user_id', $id)->first();
        return view('prodi.edit', compact('prodi', 'jabatan'));
    }

    public function updateprogramstudi(Request $request, $id)
    {
        $prodi = User::find($id);

        request()->validate([

           'nama' => 'required',
            'iduser' => 'required|numeric',
            'emailsso' => 'required|email',
            'emailpribadi' => 'required|email',
            'notelp' => 'required|numeric|min:8',
            'jabatan' =>'required',

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'iduser.required' => 'NIM tidak boleh kosong',
            'iduser.numeric'=> 'NIM harus berupa angka',
            'emailsso.required' => 'Email SSO tidak boleh kosong',
            'emailsso.email' => 'Email SSO harus valid',
            'notelp.required' => 'Nomor telepon tidak boleh kosong',
            'notelp.numeric' => 'Nomor telepon harus berupa angka',
            'notelp.min' => 'Nomor telepon minimal 8 karakter',
            'jabatan.required' => 'Jabatan tidak boleh kosong',

        ]);

        User::where('id', $id)->update([
            'nama' => $request->nama,
            'iduser' => $request->iduser,
            'emailsso' => $request->emailsso,
            'emailpribadi' => $request->emailpribadi,
            'notelp' => $request->notelp,
        ]);

        DetailProdi::where('user_id', $id)->update([
            'jabatan' => $request->jabatan,
        ]);

        Alert::success('Berhasil', 'Data program studi berhasil diubah');
        return redirect('/program-studi');




    }

}
