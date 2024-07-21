<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadershipDetail extends Model
{
    use HasFactory;
    public $table = 'progress_to_leadership';
    protected $fillable = ['leadership_id', 'category', 'number'];

    public function leadership()
    {
        return $this->belongsTo(Statistic::class, "leadership_id");
    }
}
