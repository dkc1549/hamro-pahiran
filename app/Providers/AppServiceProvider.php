<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
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
        // Define a custom Blade directive for checking routes
        Blade::directive('routeHas', function ($route) {
            return "<?php echo Route::has($route) ? 'true' : 'false'; ?>";
        });
    }
}
