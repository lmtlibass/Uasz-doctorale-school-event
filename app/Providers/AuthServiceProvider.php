<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Appelle;
use App\Models\Evenement;
use App\Policies\AppellePolicy;
use App\Policies\EvenementPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Appelle::class      => AppellePolicy::class,
        Evenement::class    => EvenementPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
