<?php

return [

    /* Environment variables for website */
    //company information available to all pages on the website
    'phone' => env('COMPANY_PHONE_NO'),
    'email' => env('COMPANY_EMAIL'),
    'street' => env('COMPANY_STREET'),
    'city' => env('COMPANY_CITY'),
    'state' => env('COMPANY_STATE'),
    'zipcode' => env('COMPANY_ZIP_CODE'),
    'latitude' => env('COMPANY_LATITUDE'),
    'longitude' => env('COMPANY_LONGITUDE'),
    'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY'),

    

    /* Second location */
    'phone2' => env('COMPANY_PHONE_NO2'),
    'street2' => env('COMPANY_STREET2'),
    'city2' => env('COMPANY_CITY2'),
    'state2' => env('COMPANY_STATE2'),
    'zipcode2' => env('COMPANY_ZIP_CODE2'),
    'latitude2' => env('COMPANY_LATITUDE2'),
    'longitude2' => env('COMPANY_LONGITUDE2'),
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Tansa Tech LLC'),
    'appname' => env('APP_NAME', 'Tansa Tech LLC'),
    'appweburl' => env('APP_URL', 'https://engineering.tansatech.com'),
    'linkedinurl' => env('COMPANY_LINKED_IN', "https://www.linkedin.com/company/tansa-tech-llc/"),
    'youtubeurl' => env('YOUTUBE_URL', "https://www.youtube.com/watch?v=1OEtkp5riUw"),
    'facebookurl' => env('COMPANY_FACEBOOK_PAGE', "https://www.facebook.com/profile.php?id=61574787670734"),
    /* Web Agency Builder Details */
    'dev_agency' => env('DEV_LINKED_IN','ouodesignllc.com'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

    'sqlite_absolute_path' => env('SQLITE_DATABASE_FULL_PATH'),

];
