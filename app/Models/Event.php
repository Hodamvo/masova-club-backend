<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'location',
        'category',
        'cover_image',
        'description',
        'gallery_images',
        'youtube_ids',
        'is_upcoming',
    ];

    protected $casts = [
        'date' => 'date',
        'gallery_images' => 'array',
        'youtube_ids' => 'array',
        'is_upcoming' => 'boolean',
    ];
}
