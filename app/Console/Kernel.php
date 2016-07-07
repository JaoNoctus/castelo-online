<?php

namespace Castelo\Console;

use Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $test;

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \Castelo\Console\Commands\Inspire::class,
        \Castelo\Console\Commands\Notify::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
		$schedule_crons = config('castelo.schedule');

        $schedule->command('inspire')
                 ->hourly();

        $schedule->call(function () {
            $atividades = \Castelo\Atividade::forTomorrow()->get()->implode('disciplina', ', ');

            Artisan::call('notify', [
                'title'   => 'ATIVIDADE PARA AMANHÃ',
                'content' => $atividades,
                'url'     => 'https://castelo.noctus.org/atividades',
            ]);
        })->cron($schedule_crons['notify']['atividade'])->when(function () {
            return \Castelo\Atividade::forTomorrow()->count() > 0;
        });

        $schedule->call(function () {
            $provas = \Castelo\Prova::forTomorrow()->get()->implode('disciplina', ', ');

            Artisan::call('notify', [
                'title'   => 'PROVA AMANHÃ',
                'content' => $provas,
                'url'     => 'https://castelo.noctus.org/provas',
            ]);
        })->cron($schedule_crons['notify']['prova'])->when(function () {
            return \Castelo\Prova::forTomorrow()->count() > 0;
        });
    }
}
