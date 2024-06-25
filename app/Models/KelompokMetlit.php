<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokMetlit extends Model
{
    use HasFactory, GenUid;

    protected $table = 'kelompokmetlit';



    protected $fillable = [
        'id',
        'mahasiswa_id',
        'namakelompok',
    ];




}
