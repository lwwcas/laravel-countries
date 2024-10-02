<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

trait HasVisibleGlobalScope
{
    /**
     * Retrieve a query builder without applying the 'visible' global scope.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function withNotVisible()
    {
        return static::withoutGlobalScope('is_visible');
    }
}
