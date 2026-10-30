<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'page',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image',
        'canonical_url',
        'no_index',
    ];

    protected $casts = [
        'no_index' => 'boolean',
    ];

    public static function forPage(string $page): ?self
    {
        return static::where('page', $page)->first();
    }
}
