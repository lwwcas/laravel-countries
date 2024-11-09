<?php

use Illuminate\Support\Carbon;

return [
    'name' => 'WCountries',

    'locale_key' => config('translatable.locale_key', 'locale'),

    'cache' => [
        'is_cached' => true,
        'big_time' => Carbon::now()->addDays(120),
        'small_time' => Carbon::now()->addDays(7),
        'prefix' => null,
    ],
];
