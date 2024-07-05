<?php

namespace App\Providers;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $allLanguages = [];
            foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
                $allLanguages[$localeCode] = $properties['native'];
            }
            $view->with('allLanguages', $allLanguages);
        });
    }
}
