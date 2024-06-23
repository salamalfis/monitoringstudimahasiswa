<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlasanUndurDiri extends Model
{
    use HasFactory, GenUid;

    protected $table = 'alasanundurdiri';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'alasan',
    ];
}
