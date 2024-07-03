<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSetting extends Model
{
    use HasFactory;

    protected $table = 'menu_settings';
    protected $fillable = ['id' , 'title', 'slug' , 'parent_id','page_id','sort'];
}
