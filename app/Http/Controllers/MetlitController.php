<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\KelompokMetlit;
use App\Models\BimbinganMetlit;
use App\Models\DetailMahasiswa;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MetlitController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $detailMahasiswa = DetailMahasiswa::where('user_id', $user->id)->first();
        $kelompok = KelompokMetlit::where('mahasiswa_id', $detailMahasiswa->id)->first();

        if (!$kelompok?->mahasiswa_id) {
            $anggota = KelompokMetlit::create([
                'mahasiswa_id' => $detailMahasiswa->id,
                'namakelompok' => 'Kelompok ' . $detailMahasiswa->id,
            ]);
        }

        // Ambil kelompok berdasarkan nama kelompok
        $kelompokan = KelompokMetlit::where('namakelompok', 'Kelompok ' . $detailMahasiswa->id)->paginate(10);

        // Ambil user yang terkait dengan kelompok
        $usersInKelompok = User::whereHas('detailMahasiswa', function($query) use ($kelompokan) {
            $query->whereIn('id', $kelompokan->pluck('mahasiswa_id'));
        })->orderBy('created_at')->paginate(10);

        return view('metlit.index', compact('kelompokan', 'usersInKelompok'));
    }





    public function bimbinganmetlit()
    {   $user = Auth::user()->id;
        $detailMahasiswa = DetailMahasiswa::where('user_id', $user)->first();
        $pilih = BimbinganMetlit::where('mahasiswa_id',$detailMahasiswa->id)->get();
        $bimbingan = BimbinganMetlit::where('mahasiswa_id',$detailMahasiswa->id)->paginate(10);
        return view('metlit.bimbingan', compact('bimbingan'));
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
