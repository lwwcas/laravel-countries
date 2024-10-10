<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Support\Facades\Cache;
use Lwwcas\LaravelCountries\Models\Country;

trait HasCountriesList
{
    /**
     * Get a list of countries.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function getList()
    {
        return (new static);
    }

    /**
     * Return a list of countries with their names and slugs.
     *
     * This method return a list of countries with their names and slugs.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function withNamesAndSlugs()
    {
        return Country::select(
            'lc_countries.id',
            'lc_countries.uid',
            'lc_countries.official_name',
            'lc_countries.iso_alpha_2',
            'lc_countries.iso_alpha_3',
            'lc_countries_translations.name as name'
        )
            ->join(
                'lc_countries_translations',
                'lc_countries_translations.lc_country_id',
                '=',
                'lc_countries.id'
            )
            ->with(['translations' => function ($query) {
                $query->select('lc_country_id', 'name', 'slug');
            }])
            ->orderBy('name', 'asc');
    }

    /**
     * Return a list of countries with their names, slugs and flags.
     *
     * This method return a list of countries with their names, slugs and flags.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function withNamesSlugsAndFlags()
    {
        return Country::select(
            'lc_countries.id',
            'lc_countries.uid',
            'lc_countries.official_name',
            'lc_countries.iso_alpha_2',
            'lc_countries.iso_alpha_3',
            'lc_countries.flag_emoji',
            'lc_countries_translations.name as name'
        )
            ->join(
                'lc_countries_translations',
                'lc_countries_translations.lc_country_id',
                '=',
                'lc_countries.id'
            )
            ->with(['translations' => function ($query) {
                $query->select('lc_country_id', 'name', 'slug');
            }])
            ->orderBy('name', 'asc');
    }

}
