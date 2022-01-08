<?php

return [
    'commands'     => [
        \Illuminate\Foundation\Console\UpCommand::class,
        \Illuminate\Foundation\Console\DownCommand::class,
        \Illuminate\Cache\Console\ClearCommand::class,
        \Illuminate\Foundation\Console::class
    ],
    'auth'         => [
        //
    ],
    'route_prefix' => 'artisan-remote',
];
