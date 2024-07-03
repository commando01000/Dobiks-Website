<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hacked extends Model
{
    use HasFactory;
    protected $fillable = [
        'page',
        'user_id',
        'note',
        'ip',
    ];


}
