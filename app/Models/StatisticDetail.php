<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatisticDetail extends Model
{
    use HasFactory;
    public $table = 'statistics_details';
    protected $fillable = ['statistic_id', 'category', 'number'];

    public function statistic()
    {
        return $this->belongsTo(Statistic::class);
    }
}
