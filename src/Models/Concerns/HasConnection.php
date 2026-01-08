<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;


trait HasConnection
{
    /**
     * Return the name of the connection driver
     *
     * @return string
     */

    public function getConnectionName(): string
    {
        return config('w-countries.driver');
    }

}
