<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscriptions';
    protected $fillable = [
        'user_id',
        'evenement_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'inscription_users');
    }
    

    public function evenement(){
        return $this->belongsToMany(Evenement::class, );
    }
}
