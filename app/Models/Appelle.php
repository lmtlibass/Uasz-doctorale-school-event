<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appelle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'pj',
        'user_id',
    ];
    protected $dates = ['date'];
}
