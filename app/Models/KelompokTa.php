<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelompokTa extends Model
{
    use HasFactory, GenUid;

    protected $table = 'kelompokta';



    protected $fillable = [
        'id',
        'mahasiswa_id',
        'namakelompok',
    ];

    public function anggota()
    {
        return $this->hasOne(DetailMahasiswa::class);
    }
}
