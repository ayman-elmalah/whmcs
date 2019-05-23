<?php

return [
    /*
    |--------------------------------------------------------------------------
    | WHMCS username
    |--------------------------------------------------------------------------
    |
    | Here you may provide the whmcs username that will be used for authentication action
    |
    */
    'username' => env('WHMCS_USERNAME', null),

    /*
    |--------------------------------------------------------------------------
    | WHMCS password
    |--------------------------------------------------------------------------
    |
    | Here you may provide the whmcs password that will be used for authentication action
    |
    */
    'password' => env('WHMCS_PASSWORD', null),

    /*
    |--------------------------------------------------------------------------
    | WHMCS url
    |--------------------------------------------------------------------------
    |
    | Here you may provide the whmcs url that will be used for sending curl request
    | It's can be https://www.yourdomain.com/includes/api.php
    |
    */
    'url' => env('WHMCS_URL', null),
];
