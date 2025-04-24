<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        //Melarang Lazy Loading Terjadi - Ini berguna jika bekerja dalam tim, bisa jadi tim kalian menerapkan lazy loading
        Model::preventLazyLoading();
    }
}
