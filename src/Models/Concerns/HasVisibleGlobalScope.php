<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait HasVisibleGlobalScope
{
    /**
     * Retrieve a query builder without applying the 'visible' global scope.
     *
     * @return Builder
     */
    public static function withNotVisible()
    {
        return static::withoutGlobalScope('is_visible');
    }
}
