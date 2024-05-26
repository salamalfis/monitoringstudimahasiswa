<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenWali extends Model
{
    use HasFactory;

    protected $table = 'dosenwali';

    protected $fillable = [
        'nip'
        
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
