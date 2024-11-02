<?php

namespace Kiner\PhilippinesHolidays;

use Illuminate\Support\ServiceProvider;

class PhilippineHolidaysServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Publish configuration
        $this->publishes([
            __DIR__.'/../config/philippines_holidays.php' => config_path('philippines_holidays.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/philippines_holidays.php', 'philippines_holidays'
        );
    }
}
