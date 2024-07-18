<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Us extends Model
{
    use HasFactory;
    public $table = 'contact_us';
    public $fillable = [
        'firstname',
        'lastname',
        'email',
        'subject',
        'comments'
    ];
}
