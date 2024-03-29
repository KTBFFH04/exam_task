<?php

namespace App\Providers;

use Faker\Factory;
use Flipbox\LumenGenerator\LumenGeneratorServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register(LumenGeneratorServiceProvider::class);
        }
    }
}
