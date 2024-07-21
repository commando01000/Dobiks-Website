<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    public $fillable = [
        'title', 'cover', 'description', 'slug', 'service_status', 'service_category', "builder", 'short_description', 'emdlink',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryService::class, "service_category");
    }
}
