<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $fillable = [
        'name',
        'role_key',
        'photo_path',
        'email',
        'phone',
        'is_visible',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];
}
