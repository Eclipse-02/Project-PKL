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

    'default' => env('FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
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
            'throw' => false,
        ],

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
        public_path('storage/supl') => storage_path('app/public/supl'),
        public_path('storage/pkg') => storage_path('app/public/pkg'),
        public_path('storage/reg') => storage_path('app/public/reg'),
        public_path('storage/supl/ktps') => storage_path('app/public/supl/ktps'),
        public_path('storage/supl/mous') => storage_path('app/public/supl/mous'),
        public_path('storage/supl/npwps') => storage_path('app/public/supl/npwps'),
        public_path('storage/pkg/pkg-imgs') => storage_path('app/public/pkg/pkg-img'),
        public_path('storage/reg/full-name') => storage_path('app/public/reg/full-name'),
        public_path('storage/reg/half-name') => storage_path('app/public/reg/half-name'),
        public_path('storage/reg/pass-name') => storage_path('app/public/reg/pass-name'),
        public_path('storage/reg/copy-pass-name') => storage_path('app/public/reg/copy-pass-name'),
        public_path('storage/reg/yb-name') => storage_path('app/public/reg/yb-name'),
        public_path('storage/reg/id-name') => storage_path('app/public/reg/id-name'),
        public_path('storage/reg/kk-name') => storage_path('app/public/reg/kk-name'),
        public_path('storage/reg/akta-n-name') => storage_path('app/public/reg/akta-n-name'),
        public_path('storage/reg/akta-l-name') => storage_path('app/public/reg/akta-l-name'),
    ],
];
