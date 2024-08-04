<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        view()->composer('*', function ($view) {
            $services = Service::all();
            $view->with('services', $services);
        });
        // Schema::defaultStringLength(191);
        Paginator::useBootstrapFive();
    }
}
