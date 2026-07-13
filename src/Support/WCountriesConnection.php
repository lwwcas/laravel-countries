<?php

namespace Lwwcas\LaravelCountries\Support;

final class WCountriesConnection
{
    public static function name(): string
    {
        return config('w-countries.driver', config('database.default', 'mysql'));
    }
}
