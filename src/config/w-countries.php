<?php

use Illuminate\Support\Carbon;

return [
    'name' => 'WCountries',

    'driver' => env('DB_CONNECTION_COUNTRIES', config('database.default', 'mysql')),

    'locale_key' => config('translatable.locale_key', 'locale'),

    'cache' => [
        'is_cached' => true,
        'big_time' => Carbon::now()->addDays(120),
        'small_time' => Carbon::now()->addDays(7),
        'prefix' => null,
    ],
];
