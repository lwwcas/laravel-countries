<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait HasWhereSlug
{
    /**
     * Find a model by slug.
     *
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereSlug($query, string $slug): Builder
    {
        $slug = Str::slug($slug);

        $query->whereTranslation('slug', $slug);

        return $query;
    }

    /**
     * Find a model by slug (or where).
     *
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeOrWhereSlug($query, string $slug): Builder
    {
        $slug = Str::slug($slug);

        $query->orWhereTranslation('slug', $slug);

        return $query;
    }
}
