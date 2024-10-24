<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait HasWhereLanguages
{
    /**
     * Find a country by language.
     *
     * @param string $language
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereLanguage($query, string $language)
    {
        $languageInLowercase = Str::lower($language);
        return $query->whereJsonContains('languages', $languageInLowercase);
    }

    /**
     * Find a country by language.
     *
     * @param array $languages
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereLanguages($query, array $languages)
    {
        $languagesInLowercase = array_map(fn($lang) => Str::lower($lang), $languages);
        return $query->where(function (Builder $query) use ($languagesInLowercase){
                foreach ($languagesInLowercase as $language) {
                    $query->whereJsonContains('languages', $language);
                }
            });
    }

}
