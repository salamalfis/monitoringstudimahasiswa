<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory, GenUid;

public $table = 'semester';

protected $fillable = [
    'tahun',
    'semester',
];


}
