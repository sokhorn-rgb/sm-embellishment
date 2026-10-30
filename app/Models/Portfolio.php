<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'client_name',
        'description',
        'thumbnail',
        'gallery_images',
        'category',
        'material',
        'completion_date',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function (Portfolio $portfolio) {
            if (empty($portfolio->slug)) {
                $portfolio->slug = Str::slug($portfolio->title);
            }
        });
    }

    public function getThumbnailUrlAttribute(): ?string
    {
        if (empty($this->thumbnail)) {
            return null;
        }

        if (file_exists(public_path('storage/'.$this->thumbnail))) {
            return asset('storage/'.$this->thumbnail);
        }

        return null;
    }

    /**
     * @return array<string>
     */
    public function getValidGalleryImagesAttribute(): array
    {
        $images = is_array($this->gallery_images) ? $this->gallery_images : (json_decode($this->gallery_images, true) ?? []);

        return array_values(array_filter($images, function ($img) {
            return ! empty($img) && file_exists(public_path('storage/'.$img));
        }));
    }
}
