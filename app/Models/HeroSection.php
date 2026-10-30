<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'subheading',
        'description',
        'primary_button_text',
        'primary_button_url',
        'secondary_button_text',
        'secondary_button_url',
        'background_image',
        'overlay_image',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getBackgroundImageUrlAttribute(): ?string
    {
        if ($this->background_image) {
            return asset('storage/'.$this->background_image);
        }

        return asset('images/hero-bg.jpg');
    }
}
