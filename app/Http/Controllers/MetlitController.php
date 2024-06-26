<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\GenUid;
use Illuminate\Http\Request;
use App\Models\KelompokMetlit;
use App\Models\BimbinganMetlit;
use App\Models\DetailMahasiswa;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MetlitController extends Controller
{
    use GenUid;

    public function index()
    {

       
        $user = Auth::user();
        $detailMahasiswa = DetailMahasiswa::where('user_id', $user->id)->first();
        $kelompok = KelompokMetlit::where('mahasiswa_id', $detailMahasiswa->id)->first();



        if (!$kelompok?->mahasiswa_id == $detailMahasiswa->id) {

            $uid = $this->uid();
            $anggota = KelompokMetlit::create([
                'mahasiswa_id' => $detailMahasiswa->id,
                'namakelompok' =>  'Kelompok '.$uid ,
            ]);

            // Update kolom namakelompok pada DetailMahasiswa
            $updatekelompok = DetailMahasiswa::where('id', $detailMahasiswa->id)->update([
                'namakelompok' => 'Kelompok '.$uid,
            ]);

            return redirect('/anggota-kelompok-metode-penelitian');
        }
        else{

            // Ambil kelompok berdasarkan nama kelompok
            $kelompokan = KelompokMetlit::where('namakelompok', $detailMahasiswa->namakelompok)->paginate(10);

            // Ambil user yang terkait dengan kelompok
            $usersInKelompok = User::whereHas('detailMahasiswa', function($query) use ($kelompokan) {
                $query->whereIn('id', $kelompokan->pluck('mahasiswa_id'));
            })->paginate(10);
        
            $title = 'Hapus Anggota!';
            $text = "Apakah anda yakin?";
            confirmDelete($title, $text);
    
            return view('metlit.index', compact('kelompokan', 'usersInKelompok'));
        }
    }

    
    public function tambahanggotakelompok(Request $request)
    {

     
        Request()->validate([
            'iduser' => 'required',
        ],
        [
            'iduser.required' => 'Nim Anggota tidak boleh kosong',
        ]);

        $user = User::where('iduser', $request->iduser)->first();
        $detailMahasiswa = DetailMahasiswa::where('user_id', $user->id)->first();

        if($detailMahasiswa == null){
            Alert::error('Gagal', 'Nim Anggota tidak ditemukan');
            return redirect('/anggota-kelompok-metode-penelitian');
        }

        $kelompok = KelompokMetlit::where('mahasiswa_id', $detailMahasiswa->id)->first();

       

        if ($kelompok?->mahasiswa_id == $detailMahasiswa->id) {

            if($kelompok->namakelompok == $request->namakelompok){
                Alert::error('Gagal', 'Anggota sudah terdaftar pada kelompok ini');
                return redirect('/anggota-kelompok-metode-penelitian');
            }
            else{
                $updatekelompok = KelompokMetlit::where('id', $kelompok->id)->update([
                    'namakelompok' => $request->namakelompok,
                ]);
                
                $updatedetail = DetailMahasiswa::where('id', $detailMahasiswa->id)->update([
                    'namakelompok' => $request->namakelompok,
                ]);
                
                Alert::success('Berhasil', 'Anggota berhasil ditambahkan');
                return redirect('/anggota-kelompok-metode-penelitian');
            }



        }
        else{
            $kelompok = KelompokMetlit::create([
                'mahasiswa_id' => $detailMahasiswa->id,
                'namakelompok' => $request->namakelompok,
            ]);

            $updatekelompok = DetailMahasiswa::where('id', $detailMahasiswa->id)->update([
                'namakelompok' => $request->namakelompok,
            ]);

            Alert::success('Berhasil', 'Anggota berhasil ditambahkan');
            return redirect('/anggota-kelompok-metode-penelitian');
        }
    }

    public function deleteanggota($id){
        $anggota = User::find($id);
        $detailMahasiswa = DetailMahasiswa::where('user_id', $anggota->id)->first();
        $kelompok = KelompokMetlit::where('mahasiswa_id', $detailMahasiswa->id)->first();

        if($kelompok->namakelompok == $detailMahasiswa->namakelompok){
            $updatekelompok = DetailMahasiswa::where('id', $detailMahasiswa->id)->update([
                'namakelompok' => null,
            ]);

            $kelompok->delete();
            Alert::success('Berhasil', 'Anggota berhasil dihapus');
            return redirect('/anggota-kelompok-metode-penelitian');
        }
        else{
            $kelompok->delete();
            Alert::success('Berhasil', 'Anggota berhasil dihapus');
            return redirect('/anggota-kelompok-metode-penelitian');
        }
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
