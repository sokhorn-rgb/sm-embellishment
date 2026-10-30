<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'image',
        'vision',
        'mission',
        'stats',
        'is_active',
    ];

    protected $casts = [
        'stats' => 'array',
        'is_active' => 'boolean',
    ];
}
