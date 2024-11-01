<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

trait HasTranslationGlobalScope
{
    /**
     * Retrieve a query builder without applying the 'translation' global scope.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function withNotTranslation()
    {
        return static::withoutGlobalScope('translation');
    }
}
