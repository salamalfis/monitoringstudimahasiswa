<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LabRiset extends Model
{
    use HasFactory, GenUid;

    protected $table = 'labriset';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_labriset',
        'kode_labriset',
        'peminatan_id',
        'active',
    ];
}
