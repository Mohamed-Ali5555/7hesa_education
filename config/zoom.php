<?php

return [
    'client_id' => env('ZOOM_CLIENT_KEY'),
    'client_secret' => env('ZOOM_CLIENT_SECRET'),
    'account_id' => env('ZOOM_ACCOUNT_ID'),
    'base_url' => 'https://api.zoom.us/v2/',

    'token_life' => 60 * 60 * 24 * 7, // In seconds, default 1 week
    'authentication_method' => 'jwt', // Only jwt compatible at present
    'max_api_calls_per_request' => '5',
    'approval_type' => false,
    'audio' => false,
    'auto_recording' => false,
];
