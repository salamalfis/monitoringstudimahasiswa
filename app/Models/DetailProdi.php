<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProdi extends Model
{
    use HasFactory, GenUid;

    protected $table = 'detail_prodi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jabatan',
        'user_id',  
    ];
}
