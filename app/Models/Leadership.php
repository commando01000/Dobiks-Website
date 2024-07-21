<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    use HasFactory;
    public $table = 'leaderships';

    protected $fillable = [
        'name',
        'position',
        'photo',
        'bio',
        'facebook',
        'twitter',
        'linkedin',
        'github',
        'dribble',

    ];
    public function details()
    {
        return $this->hasMany(LeadershipDetail::class, "leadership_id");
    }
}
