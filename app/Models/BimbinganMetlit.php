<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BimbinganMetlit extends Model
{
    use HasFactory,GenUid;

    protected $table = 'bimbinganmetlit';

    protected $fillable = [
        'mahasiswa_id',
        'dosenpbb_id',
        'tanggal',
        'bukti_bimbingan',
        
    ];

}
