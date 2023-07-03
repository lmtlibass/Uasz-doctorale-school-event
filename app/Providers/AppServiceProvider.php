<?php

namespace App\Providers;

use App\Models\Evenement;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
      
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $nombre_evenemnt = Evenement::count();
        View::share('nombre_evenement',$nombre_evenemnt);
    }
}
