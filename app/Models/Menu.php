<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory,GenUid;

    public $table = 'menu';

    protected $fillable = [
        'nama',
        'route',
        'icon',
    ];

    public function submenu()
    {
        return $this->hasMany(Submenu::class);
    }
}
