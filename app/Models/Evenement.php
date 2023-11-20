<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;

    protected $table = 'evenements';

    protected $fillable = [
        'title',
        'description',
        'media',
        'date',
        'user_id',
        'isPremium',
    ];

    protected $dates = ['date'];

    public function imageUrl(){
        return Storage::disk('public')->url($this->media);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }
    
}
