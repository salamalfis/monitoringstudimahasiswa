<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenWali extends Model
{
    use HasFactory;

    protected $table = 'dosenwali';

    protected $fillable = [
        'id',
        'nama',
        'nip',
        'email',
        'password',
        'kodedosen',
        'kelaswali',
        'angkatan',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
