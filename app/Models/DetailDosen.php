<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailDosen extends Model
{
    use HasFactory, GenUid;

    protected $table = 'detail_dosen';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'peminatan_id',
        'labriset_id',
        'user_id',
    ];
}
