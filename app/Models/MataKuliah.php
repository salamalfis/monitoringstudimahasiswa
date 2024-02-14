<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliah extends Model
{
    use HasFactory,GenUid;

    public $table = 'master_matakuliah';

    protected $fillable = [
        'kategori',
        'kode',
        'namamatakuliah',
        'namamatakuliahenglish',
        'sks',
        'semester',
    ];


    public function getMataKuliah($id = null)
    {
        $query = DB::table('master_matakuliah')
            ->select('master_matakuliah.*')
            ->orderBy('master_matakuliah.namamatakuliah', 'asc');

        if ($id != null) {
            $query->where('master_matakuliah.id', $id);
        }

        return $query->get();
    }

    public function getMataKuliahPilihan($id = null)
    {
        $query = DB::table('matkul_pilihan')
            ->select('matkul_pilihan.*')
            ->orderBy('matkul_pilihan.namamatakuliah', 'asc');

        if ($id != null) {
            $query->where('matkul_pilihan.id', $id);
        }

        return $query->get();
    }


}
