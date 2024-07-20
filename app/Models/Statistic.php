<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description','short_description'];

    public function details()
    {
        return $this->hasMany(StatisticDetail::class);
    }
}
