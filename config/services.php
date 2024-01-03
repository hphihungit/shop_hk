<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '628755303454-7sehq78imiottjk8nf24ji6t8i9aebl1.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '712632437212770',
        'client_secret' => '06b1ccdbe2c15877516558caf31302e8',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],
    'facebook' => [
        'client_id' => '888239139356075',
        'client_secret' => 'daafbc239523c7431a36c789fcefc33f',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],

];
