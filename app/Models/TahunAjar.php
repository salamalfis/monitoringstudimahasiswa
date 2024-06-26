<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TahunAjar extends Model
{
    use HasFactory, GenUid;

    protected $table = 'tahun_ajar';

    protected $fillable = [
        'tahun_ajar'
    ];

}
