<?php

namespace App\Models;

use App\Traits\GenUid;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramStudi extends Model
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
        'active',
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
