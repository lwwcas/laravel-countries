<?php

namespace Lwwcas\LaravelCountries\Facades;

use Illuminate\Support\Facades\Facade;
use Lwwcas\LaravelCountries\Skeleton\SkeletonClass;

/**
 * @see SkeletonClass
 */
class WCountries extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'w-countries';
    }
}
