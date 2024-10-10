<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;

trait HasWhereIso
{
    /**
     * Find a model by iso.
     *
     * @param string $iso
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIso($query, string $iso): Builder
    {
        if (method_exists($this, 'scopeWhereIsoAlpha2')) {
            $query->where('iso_alpha_2', $iso);
        }

        if (method_exists($this, 'scopeWhereIsoAlpha3')) {
            $query->orWhere('iso_alpha_3', $iso);
        }

        if (method_exists($this, 'scopeWhereIsoNumeric')) {
            $query->orWhere('iso_numeric', $iso);
        }

        return $query;
    }

    /**
     * Find a model by iso.
     *
     * @param string $iso
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeOrWhereIso($query, string $iso): Builder
    {
        if (method_exists($this, 'scopeWhereIsoAlpha2')) {
            $query->orWhere('iso_alpha_2', $iso);
        }

        if (method_exists($this, 'scopeWhereIsoAlpha3')) {
            $query->orWhere('iso_alpha_3', $iso);
        }

        if (method_exists($this, 'scopeWhereIsoNumeric')) {
            $query->orWhere('iso_numeric', $iso);
        }

        return $query;
    }

}
