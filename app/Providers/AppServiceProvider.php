<?php

namespace App\Providers;

use App\Models\EthnicGroup;
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
        // View::composer('*', function ($view) {
        //     $ethnicGroups = EthnicGroup::all();
        //     $view->with('ethnicGroups', $ethnicGroups);
        // });
    }
}
