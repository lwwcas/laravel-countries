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

    /**
     * Find a model by name with OR condition.
     *
     * @param string $name
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeOrWhereName($query, string $name): Builder
    {
        $query->orWhereTranslation('name', $name);
        return $query;
    }

    /**
     * Find a model by name with LIKE condition.
     *
     * @param string $name
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereNameLike($query, string $name): Builder
    {
        $query->whereTranslationLike('name', '% ' . $name . '%');
        return $query;
    }

    /**
     * Find a model by name with LIKE condition and OR operator.
     *
     * @param string $name
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeOrWhereNameLike($query, string $name): Builder
    {
        $query->orWhereTranslationLike('name', '% ' . $name . '%');
        return $query;
    }

    /**
     * Sort the query by name.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $sortMethod
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrderByName($query, string $sortMethod = 'asc')
    {
        return $query->orderByTranslation('name', $sortMethod);
    }
}
