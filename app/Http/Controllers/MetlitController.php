<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\KelompokMetlit;
use App\Models\DetailMahasiswa;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MetlitController extends Controller
{
    public function index()
    {
    // Mendapatkan pengguna yang sedang login
    $user = Auth::user();

    // Mendapatkan detail mahasiswa dari pengguna
    $detailMahasiswa = $user->detailMahasiswa;

    if ($detailMahasiswa) {
        $mahasiswaId = $detailMahasiswa->id;

        // Mengecek apakah pengguna sudah terdaftar dalam kelompok
        $anggota = KelompokMetlit::where('mahasiswa_id', $mahasiswaId)->first();

        if ($anggota) {
           return view('metlit.index', compact('anggota', 'detailMahasiswa'));
        } else {
            // Jika belum terdaftar, tambahkan ke database
            $kelompok = new KelompokMetlit();
            $kelompok->mahasiswa_id = $mahasiswaId;
            $kelompok->namakelompok = 'Kelompok ' . $mahasiswaId;
            $kelompok->save();

            //return redirect()->back()->with('message', 'Anda berhasil ditambahkan ke dalam kelompok.');
        }
    } else {
        // Jika detail mahasiswa tidak ditemukan, berikan pesan atau lakukan tindakan lain
        //return redirect()->back()->with('message', 'Detail mahasiswa tidak ditemukan.');
    }
}
        
        

     
        public function bimbinganmetlit()
    {
        return view('metlit.bimbingan');
    }
    public function pilihtopikmetlit()
    {
        return view('metlit.pilih');
    }
    public function progressmetlit()
    {
        return view('metlit.progress');
    }
    public function topikmetlit()
    {
        return view('metlit.topik');

    }

    // public function tambahanggota($id)
    // {
    //     $anggota = User::find($id);

    //     request()->validate([,
    //         'mahasiswa_id' => 'required',
    //     ]);

    //     KelompokMetlit::create([
    //         'mahasiswa_id' => request($id),

    //     ]);

    //     return view('metlit.tambahanggota',compact('anggota'));
    // }


}
