<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;

trait HasWhereIsoAlpha2
{
    /**
     * Find a model by iso Alpha 2.
     *
     * @param string $isoAlpha2
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIsoAlpha2($query, string $isoAlpha2): Builder
    {
        return $query->where('iso_alpha_2', $isoAlpha2);
    }

    /**
     * Find a model by iso Alpha 2, or if not found, retrieve all results.
     *
     * @param string $isoAlpha2
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeOrWhereIsoAlpha2($query, string $isoAlpha2): Builder
    {
        return $query->orWhere('iso_alpha_2', $isoAlpha2);
    }
}
