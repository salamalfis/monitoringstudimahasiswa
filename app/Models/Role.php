<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, GenUid;

    public $table = 'role';

    protected $fillable = [
        'nama',
        'role',
    ];

}
