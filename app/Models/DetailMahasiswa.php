<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMahasiswa extends Model
{
    use HasFactory, GenUid;


    protected $table = 'detail_mahasiswa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'kelas_id',
        'tak',
        'buktieprt',
        'sksselesai',
        'ipk',
        'nilaita',
        'nimaimetlit',
        'user_id',
    ];
}
