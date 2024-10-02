<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;

trait HasWhereIsoNumeric
{
    /**
     * Find a model by iso Numeric.
     *
     * @param string $isoNumeric
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIsoNumeric($query, string $isoNumeric): Builder
    {
        return $query->where('iso_numeric', $isoNumeric);
    }
}
