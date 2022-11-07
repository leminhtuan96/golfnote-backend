<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],
        'thing' => [
            'driver' => 'local',
            'root' => storage_path('app/public/thing'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'golf' => [
            'driver' => 'local',
            'root' => storage_path('app/public/golf'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'banner' => [
            'driver' => 'local',
            'root' => storage_path('app/public/banner'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'event' => [
            'driver' => 'local',
            'root' => storage_path('app/public/event'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'avatar' => [
            'driver' => 'local',
            'root' => storage_path('app/public/avatar'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'score' => [
            'driver' => 'local',
            'root' => storage_path('app/public/score'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'market' => [
            'driver' => 'local',
            'root' => storage_path('app/public/market'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'news' => [
            'driver' => 'local',
            'root' => storage_path('app/public/news'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'notification' => [
            'driver' => 'local',
            'root' => storage_path('app/public/notification'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        'club' => [
            'driver' => 'local',
            'root' => storage_path('app/public/club'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
