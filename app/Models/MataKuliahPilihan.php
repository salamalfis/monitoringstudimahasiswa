<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliahPilihan extends Model
{
    use HasFactory,GenUid;

    public $table = 'matkul_pilihan';

    protected $fillable = [
        'kategori',
        'kode',
        'namamatakuliah',
        'namamatakuliahenglish',
        'sks',
        'semester',
    ];





}
