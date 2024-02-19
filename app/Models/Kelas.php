<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory,GenUid;

    protected $table = 'kelas';

    protected $fillable = [
        'kode_kelas',
        'nama_kelas',
        'angkatan',


    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
