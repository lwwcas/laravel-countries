<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;

trait HasWhereName
{
    /**
     * Find a model by name.
     *
     * @param string $name
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereName($query, string $name): Builder
    {
        $query->whereTranslation('name', $name);
        return $query;
    }
}
