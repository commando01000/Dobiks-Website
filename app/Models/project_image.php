<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_image extends Model
{
    use HasFactory;
    public $table="projects_images";
    public $timestamps = false;
    protected $fillable = [
        "img" , "project_id"
    ];
}
