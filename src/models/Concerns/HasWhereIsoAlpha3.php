<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;

trait HasWhereIsoAlpha3
{
    /**
     * Find a model by iso Alpha 3.
     *
     * @param string $isoAlpha3
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIsoAlpha3($query, string $isoAlpha3): Builder
    {
        return $query->where('iso_alpha_3', $isoAlpha3);
    }
}
