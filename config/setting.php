<?php

/*
|--------------------------------------------------------------------------
| Setting Configuration
|--------------------------------------------------------------------------
|
| This is the default setting configuration file that will be used by the application.
| You can change the settings in this file to suit your needs, but each company will have
| their own setting configuration taken from model \App\Models\Setting using
| middleware class \App\Http\Middleware\LoadSettingFromModelIntoConfig.
|
|
*/

return [
    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | This value will set the current layout of the application based on the
    | stisla template.
    |
    | Supported: "default", "top-navigation", "transparent"
    |
    */

    'layout' => 'default',
];
