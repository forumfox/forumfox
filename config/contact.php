<?php

return [
    'facebook' => [
        'active' => env('CONTACT_FACEBOOK_ACTIVE', false),
        'url' => env('CONTACT_FACEBOOK_URL'),
        'name' => env('CONTACT_FACEBOOK_NAME'),
    ],
    'email' => [
        'active' => env('CONTACT_EMAIL_ACTIVE', false),
        'address' => env('CONTACT_EMAIL_ADDRESS'),
    ],
];
