<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\EthnicGroup;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share ethnic groups with all views
        View::composer('*', function ($view) {
            $ethnicGroups = EthnicGroup::all();
            $view->with('ethnicGroups', $ethnicGroups);
        });
    }

    public function register()
    {
        //
    }
}
