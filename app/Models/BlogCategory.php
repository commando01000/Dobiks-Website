<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table = 'blog_categories';

    protected $fillable = [
        'name',
        'status',
    ];
    use HasTranslations;
    public $translatable = ['name'];
}
