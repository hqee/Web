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

    'google' => [
        'client_id' => env('1047906876450-s6he62rpv8ojtqqj4gut9tddqj3e7e07.apps.googleusercontent.com'),
        'client_secret' => env('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'),
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

    'twitter' => [
        'client_id' => env('Tq4rP2PfTe8LssF3nsbmFhjUCe'),
        'client_secret' => env('wx7qGU56q6xeWt1HvP6V9OwrPckBajbzdvSeLRNq2TtKRHAzed'),
        'redirect' => 'http://127.0.0.1:8000/auth/twitter/callback',
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('FACEBOOK_REDIRECT'),
    ],

    'yahoo' => [
        'client_id' => env('YAHOO_CLIENT_ID'),
        'client_secret' => env('YAHOO_CLIENT_SECRET'),
        'redirect' => env('YAHOO_REDIRECT'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
