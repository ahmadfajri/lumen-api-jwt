<?php

return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users'
    ],

    'guards' => [
        'api' => [
            'driver' => 'jwt',
            'provider' => 'users',
            'expire_in_minutes' => 60,
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Models\User::class
        ]
    ]
];
