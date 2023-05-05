<?php

namespace App\Models;

use App\Models\User;
use App\Models\Appelle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Soumission extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'description',
        'status',
        'pj',
        'user_id',
        'appelle_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appelle()
    {
        return $this->belongsTo(Appelle::class);
    }

    

}