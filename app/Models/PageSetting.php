<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class PageSetting extends Model
{
    use HasFactory;
    use HasSlug;
    use HasTranslations;
    public $fillable = [
        'id', 'title', 'type', 'url_type', 'page_url', 'slug', 'body', 'components', 'styles', 'html', 'css', 'friendly_url', 'description'
    ];

    public $translatable = [
        'title', 'body', 'description'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
