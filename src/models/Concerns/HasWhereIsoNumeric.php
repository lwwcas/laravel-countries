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

    /**
     * Filter the query by the ISO Numeric, or-ing the query when the builder
     * already has a where clause.
     *
     * @param Builder $query
     * @param string $isoNumeric
     * @return Builder
     */
    public function scopeOrWhereIsoNumeric($query, string $isoNumeric): Builder
    {
        return $query->orWhere('iso_numeric', $isoNumeric);
    }
}
