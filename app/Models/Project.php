<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Project extends Model
{
    use HasFactory;
    use HasSlug;

    public $fillable = [
        'title', 'cover', 'description', 'client', 'body', 'slug' ,'created_by',
        'project_date','project_timeframe','project_location','project_category','project_status',
        'components','styles','html','css',"builder","embed"
        ];


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function images(){
        return $this->hasMany(project_image::class , "project_id");
    }
    public function category(){
        return $this->belongsTo(ProjectCategory::class , "project_category");
    }
}
