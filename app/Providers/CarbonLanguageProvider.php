<?php

namespace Castelo\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class CarbonLanguageProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Carbon::setLocale($this->app->getLocale());
    }
}
