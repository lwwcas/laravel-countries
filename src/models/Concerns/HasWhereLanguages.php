<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

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
        $databaseDriver = config('database.default');
        $languageInLowercase = Str::lower($language);

        return match ($databaseDriver) {
            'mysql', 'mariadb' => $query->whereRaw('JSON_CONTAINS(languages, ?)', [$languageInLowercase]),
            'pgsql' => $query->whereRaw('languages @> ?', ['["' . $languageInLowercase . '"]']),
            'sqlite' => $query->where('languages', 'LIKE', '%' . $languageInLowercase . '%'),
            default => $query->where('languages', 'LIKE', '%' . $languageInLowercase . '%'),
        };
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

        foreach ($languagesInLowercase as $language) {
            $query->orWhere('languages', 'LIKE', '%' . $language . '%');
        }

        return $query;
    }

}
