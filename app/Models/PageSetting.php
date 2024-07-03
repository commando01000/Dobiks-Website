<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PageSetting extends Model
{
    use HasFactory;
    use HasSlug;
    public $fillable = [
        'id' , 'title', 'type' ,'url_type', 'page_url', 'slug', 'body', 'components', 'styles', 'html', 'css', 'friendly_url', 'description'
    ];



    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
