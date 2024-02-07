<?php

namespace App\Models;

use App\Traits\GenUid;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles,GenUid;


    protected $fillable = [
        'nim',
        'jurusan',
        'alamat',
        'no_hp',
    ];

 

}
