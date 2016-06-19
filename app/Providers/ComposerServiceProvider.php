<?php

namespace Castelo\Providers;

use Castelo\Http\ViewComposers\DisciplinasComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['route' => 'atividades.create', 'atividades.edit', 'provas.create', 'provas.edit'], DisciplinasComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
