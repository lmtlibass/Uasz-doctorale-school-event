<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscriptionUser extends Model
{
    use HasFactory;

    protected $table = 'inscription_users';

    protected $fillable = [
        'inscription_id',
        'user_id',
    ];



}
