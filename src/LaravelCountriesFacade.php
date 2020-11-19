<?php

namespace Lwwcas\LaravelCountries;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lwwcas\LaravelCountries\Skeleton\SkeletonClass
 */
class LaravelCountriesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-countries';
    }
}
