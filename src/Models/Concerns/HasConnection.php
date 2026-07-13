<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Lwwcas\LaravelCountries\Support\WCountriesConnection;

trait HasConnection
{
    public function getConnectionName(): ?string
    {
        return WCountriesConnection::name();
    }
}
