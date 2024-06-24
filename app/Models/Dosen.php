<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory, GenUid;

    protected $table = 'dosen';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'nip',
        'emailsso',
        'emailpribadi',
        'notelp',
    ];

    
}
