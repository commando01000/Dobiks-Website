<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['name', 'title', 'desc', 'image', 'rating', 'status', 'designation'];
    public $translatable=['desc'];
}
