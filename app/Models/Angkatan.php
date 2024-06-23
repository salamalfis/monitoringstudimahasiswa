<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory, GenUid;

    protected $table = 'angkatan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'tahun_angkatan',
        'active',
    ];
}
