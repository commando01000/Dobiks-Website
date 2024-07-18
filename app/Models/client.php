<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $table = 'clients';
    protected $fillable = [
        'name',
        'description',
        'builder',
        'cover',
        'client_category',
        'created_by'
    ];
    public function category()
    {
        return $this->belongsTo(ClientCategory::class, "client_category");
    }
}