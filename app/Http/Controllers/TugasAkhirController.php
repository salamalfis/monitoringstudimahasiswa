<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\GenUid;
use App\Models\KelompokTa;
use Illuminate\Http\Request;
use App\Models\DetailMahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TugasAkhirController extends Controller
{
    use GenUid;

    public function index()
    {


        $user = Auth::user();
        $detailMahasiswa = DetailMahasiswa::where('user_id', $user->id)->first();
        $kelompok = KelompokTa::where('mahasiswa_id', $detailMahasiswa->id)->first();



        if (!$kelompok?->mahasiswa_id == $detailMahasiswa->id) {

            $uid = $this->uid();
            $anggota = KelompokTa::create([
                'mahasiswa_id' => $detailMahasiswa->id,
                'namakelompok' =>  'Kelompok '.$uid ,
            ]);

            // Update kolom namakelompok pada DetailMahasiswa
            $updatekelompok = DetailMahasiswa::where('id', $detailMahasiswa->id)->update([
                'namakelompokta' => 'Kelompok '.$uid,
            ]);

            return redirect('/anggota-kelompok-tugas-akhir');
        }
        else{

            // Ambil kelompok berdasarkan nama kelompok
            $kelompokan = KelompokTa::where('namakelompok', $detailMahasiswa->namakelompokta)->paginate(10);

            // Ambil user yang terkait dengan kelompok
            $usersInKelompok = User::whereHas('detailMahasiswa', function($query) use ($kelompokan) {
                $query->whereIn('id', $kelompokan->pluck('mahasiswa_id'));
            })->paginate(10);

            $title = 'Hapus Anggota!';
            $text = "Apakah anda yakin?";
            confirmDelete($title, $text);

            return view('tugasakhir.index', compact('kelompokan', 'usersInKelompok'));
        }
    }


    public function tambahanggotakelompok(Request $request)
    {


        Request()->validate([
            'iduser' => 'required|numeric',
        ],
        [
            'iduser.required' => 'Nim Anggota tidak boleh kosong',
            'iduser.numeric' => 'Nim Anggota harus berupa angka',
        ]);

        $user = User::where('iduser', $request->iduser)->first();
        if($user == null){
            Alert::error('Gagal', 'Nim Anggota tidak ditemukan');
            return redirect('/anggota-kelompok-tugas-akhir');
        }
        $detailMahasiswa = DetailMahasiswa::where('user_id', $user->id)->first();



        $kelompok = KelompokTa::where('mahasiswa_id', $detailMahasiswa->id)->first();



        if ($kelompok?->mahasiswa_id == $detailMahasiswa->id) {

            if($kelompok->namakelompok == $request->namakelompok){
                Alert::error('Gagal', 'Anggota sudah terdaftar pada kelompok ini');
                return redirect('/anggota-kelompok-tugas-akhir');
            }
            else{
                $updatekelompok = KelompokTa::where('id', $kelompok->id)->update([
                    'namakelompok' => $request->namakelompok,
                ]);

                $updatedetail = DetailMahasiswa::where('id', $detailMahasiswa->id)->update([
                    'namakelompokta' => $request->namakelompok,
                ]);

                Alert::success('Berhasil', 'Anggota berhasil ditambahkan');
                return redirect('/anggota-kelompok-tugas-akhir');
            }



        }
        else{
            $kelompok = KelompokTa::create([
                'mahasiswa_id' => $detailMahasiswa->id,
                'namakelompok' => $request->namakelompok,
            ]);

            $updatekelompok = DetailMahasiswa::where('id', $detailMahasiswa->id)->update([
                'namakelompokta' => $request->namakelompok,
            ]);

            Alert::success('Berhasil', 'Anggota berhasil ditambahkan');
            return redirect('/anggota-kelompok-tugas-akhir');
        }
    }

    public function deleteanggota($id){
        $anggota = User::find($id);
        $detailMahasiswa = DetailMahasiswa::where('user_id', $anggota->id)->first();
        $kelompok = KelompokTa::where('mahasiswa_id', $detailMahasiswa->id)->first();

        if($kelompok->namakelompok == $detailMahasiswa->namakelompokta){
            $updatekelompok = DetailMahasiswa::where('id', $detailMahasiswa->id)->update([
                'namakelompokta' => null,
            ]);

            $kelompok->delete();
            Alert::success('Berhasil', 'Anggota berhasil dihapus');
            return redirect('/anggota-kelompok-tugas-akhir');
        }
        else{
            $kelompok->delete();
            Alert::success('Berhasil', 'Anggota berhasil dihapus');
            return redirect('/anggota-kelompok-tugas-akhir');
        }
    }
    public function bimbingantugasakhir()
    {
        return view('tugasakhir.bimbingan');
    }
    public function progresstugasakhir()
    {
        return view('tugasakhir.progress');
    }
    public function topiktugasakhir()
    {
        return view('tugasakhir.topik');
    }


}
