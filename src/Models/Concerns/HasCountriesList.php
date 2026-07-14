<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Trait\WithOnlyWhereFunctions;
use Lwwcas\LaravelCountries\Trait\WithPairWhereFunctions;

trait HasCountriesList
{
    use WithOnlyWhereFunctions,
        WithPairWhereFunctions;

    /**
     * Get a list of countries.
     *
     * @return Builder
     */
    public static function getList()
    {
        return new static;
    }

    /**
     * Return a list of countries with their names and slugs.
     *
     * Joins `lc_countries` with `lc_countries_translations` and returns every
     * visible country. There is no built-in limit on the result set.
     *
     * @return Builder<Country>
     */
    public function withNamesAndSlugs()
    {
        return Country::select(
            'lc_countries.id as id',
            'lc_countries.uid as uid',
            'lc_countries.official_name as official_name',
            'lc_countries.iso_alpha_2 as iso_alpha_2',
            'lc_countries.iso_alpha_3 as iso_alpha_3',
            'lc_countries_translations.name as name',
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
     * Joins `lc_countries` with `lc_countries_translations` and returns every
     * visible country. There is no built-in limit on the result set.
     *
     * @return Builder<Country>
     */
    public function withNamesSlugsAndFlags()
    {
        return Country::select(
            'lc_countries.id as id',
            'lc_countries.uid as uid',
            'lc_countries.official_name as official_name',
            'lc_countries.iso_alpha_2 as iso_alpha_2',
            'lc_countries.iso_alpha_3 as iso_alpha_3',
            'lc_countries.flag_emoji as flag_emoji',
            'lc_countries_translations.name as name',
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
