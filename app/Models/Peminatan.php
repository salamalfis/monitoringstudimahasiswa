<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminatan extends Model
{
    use HasFactory, GenUid;

    protected $table = 'peminatan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kode_peminatan',
        'nama_peminatan',
        'active'
    ];
}
