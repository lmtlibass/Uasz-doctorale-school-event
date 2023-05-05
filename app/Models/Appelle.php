<?php

namespace App\Models;

use App\Models\User;
use App\Models\Soumission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function soumissions()
    {
        return $this->hasMany(Soumission::class);
    }


    public function imageUrl(){
        return Storage::disk('public')->url($this->image);
    }
    public function pjUrl(){
        return Storage::disk('public')->url($this->pj);
    }
}
