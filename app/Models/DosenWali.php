<?php

namespace App\Models;

use App\Traits\GenUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class DosenWali extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles, GenUid;

    public $table = 'users';

    protected $fillable = [
        'id',
        'nama',
        'iduser',
        'emailsso',
        'emailpribadi',
        'notelp',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

        'password',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',

    ];
}
