<?php

return [

    'disciplinas' => [
        'Português',
        'Matemática',
        'Física',
        'Química',
        'Biologia',
        'História',
        'Geografia',
        'Redação',
        'Religião',
        'Filosofia',
    ],

    // 4 hours
    'cache_time' => 4 * 60,

    /*
    |--------------------------------------------------------------------------
    | Schedule Time
    |--------------------------------------------------------------------------
    |
    | Here you configure the times for tasks to be performed.
    |
    */

    'schedule' => [
        'notify' => [
            // every day, 8am and 2pm
            'atividade' => '* 8,14 * * *',
            // every day, 8am and 6pm
            'prova' => '* 7,18 * * *',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | OneSignal Configurations
    |--------------------------------------------------------------------------
    |
    */

    'onesignal' => [
        'app_key' => env('ONESIGNAL_APP_KEY'),
        'api_key' => env('ONESIGNAL_API_KEY'),
        'for'     => [
            'player_ids'        => ['5a5ddb73-bf71-4239-be17-0489b3d766da'],
            'included_segments' => ['All'],
        ],
        'send_for' => 'included_segments',
    ],

];
