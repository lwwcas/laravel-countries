<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait HasTranslationGlobalScope
{
    /**
     * Retrieve a query builder without applying the 'translation' global scope.
     *
     * @return Builder
     */
    public static function withNotTranslation()
    {
        return static::withoutGlobalScope('translation');
    }
}
