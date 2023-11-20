<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Appelle;
use App\Models\Article;
use App\Models\Evenement;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function appelles()
    {
        return $this->hasMany(Appelle::class);
    }
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
    public function soumission()
    {
        return $this->hasOne(Soumission::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function inscriptions()
    {
        return $this->belongsToMany(Inscription::class, 'inscription_users');
    }
}
