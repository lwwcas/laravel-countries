<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Support\Facades\Cache;
use Lwwcas\LaravelCountries\Facades\FlagEmoji;
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
     * This method return a list of countries with their names, slugs and flags.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Database\Eloquent\Collection
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

    /**
     * Get a list of country IDs.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyId()
    {
        return $this->withNamesAndSlugs()->pluck('id');
    }

    /**
     * Get a list of country UIDs.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyUid()
    {
        return $this->withNamesAndSlugs()->pluck('uid');
    }

    /**
     * Get a list of country names.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyName()
    {
        return $this->withNamesAndSlugs()->pluck('name');
    }

    /**
     * Get a list of official country names.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyOfficialName()
    {
        return $this->withNamesAndSlugs()->pluck('official_name');
    }

    /**
     * Get a list of ISO 3166-1 alpha-2 codes.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyIso()
    {
        return $this->onlyAlpha2();
    }

    /**
     * Get a list of ISO 3166-1 alpha-2 codes.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyAlpha2()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_2');
    }

    /**
     * Get a list of ISO 3166-1 alpha-3 codes.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyAlpha3()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_3');
    }


    /**
     * Get a list of flag emojis.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyFlag()
    {
        return $this->onlyEmoji();
    }

    /**
     * Get a list of country flag emojis.
     *
     * This method return a list of country flag emojis.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmoji()
    {
        $result =$this->withNamesSlugsAndFlags()->pluck('flag_emoji') ?? collect([]);
        return (new FlagEmoji($result));
    }

    /**
     * Get a list of countries with their ids and official names.
     *
     * This method returns a list of countries with their ids and official names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function idAndOfficialName()
    {
        return $this->withNamesAndSlugs()->pluck('official_name', 'id');
    }

    /**
     * Get a list of countries with their ids and UIDs.
     *
     * This method returns a list of countries with their ids and UIDs.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function idAndUid()
    {
        return $this->withNamesAndSlugs()->pluck('uid', 'id');
    }

    /**
     * Get a list of countries with their ids and names.
     *
     * This method returns a list of countries with their ids and names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function idAndName()
    {
        return $this->withNamesAndSlugs()->pluck('name', 'id');
    }

    /**
     * Get a list of countries with their ids and iso_alpha_2 codes.
     *
     * This method returns a list of countries with their ids and iso_alpha_2 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function idAndAlpha2()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_2', 'id');
    }

    /**
     * Get a list of countries with their ids and iso_alpha_3 codes.
     *
     * This method returns a list of countries with their ids and iso_alpha_3 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function idAndAlpha3()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_3', 'id');
    }

    /**
     * Get a list of countries with their ids and emojis.
     *
     * This method returns a list of countries with their ids and emojis.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function idAndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'id') ?? collect([]);
        return (new FlagEmoji($result));
    }

    /**
     * Get a list of countries with their uids and names.
     *
     * This method returns a list of countries with their uids and names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function uidAndName()
    {
        return $this->withNamesAndSlugs()->pluck('name', 'uid');
    }

    /**
     * Get a list of countries with their uids and official names.
     *
     * This method returns a list of countries with their uids and official names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function uidAndOfficialName()
    {
        return $this->withNamesAndSlugs()->pluck('official_name', 'uid');
    }

    /**
     * Get a list of countries with their uids and iso_alpha_2 codes.
     *
     * This method returns a list of countries with their uids and iso_alpha_2 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function uidAndAlpha2()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_2', 'uid');
    }

    /**
     * Get a list of countries with their uids and iso_alpha_3 codes.
     *
     * This method returns a list of countries with their uids and iso_alpha_3 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function uidAndAlpha3()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_3', 'uid');
    }

    /**
     * Get a list of countries with their uids and emojis.
     *
     * This method returns a list of countries with their uids and emojis.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function uidAndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'uid') ?? collect([]);
        return (new FlagEmoji($result));
    }

    /**
     * Get a list of countries with their names and official names.
     *
     * This method returns a list of countries with their names and official names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function nameAndOfficialName()
    {
        return $this->withNamesAndSlugs()->pluck('official_name', 'name');
    }

    /**
     * Get a list of countries with their names and iso_alpha_2 codes.
     *
     * This method returns a list of countries with their names and iso_alpha_2 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function nameAndAlpha2()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_2', 'name');
    }

    /**
     * Get a list of countries with their names and iso_alpha_3 codes.
     *
     * This method returns a list of countries with their names and iso_alpha_3 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function nameAndAlpha3()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_3', 'name');
    }

    /**
     * Get a list of countries with their names and emojis.
     *
     * This method returns a list of countries with their names and emojis.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function nameAndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'name') ?? collect([]);
        return (new FlagEmoji($result));
    }

    /**
     * Get a list of countries with their official names and iso_alpha_2 codes.
     *
     * This method returns a list of countries with their official names and iso_alpha_2 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function officialNameAndAlpha2()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_2', 'official_name');
    }

    /**
     * Get a list of countries with their official names and iso_alpha_3 codes.
     *
     * This method returns a list of countries with their official names and iso_alpha_3 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function officialNameAndAlpha3()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_3', 'official_name');
    }

    /**
     * Get a list of countries with their official names and emojis.
     *
     * This method returns a list of countries with their official names and emojis.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function officialNameAndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'official_name') ?? collect([]);
        return (new FlagEmoji($result));
    }

    /**
     * Get a list of countries with their iso_alpha_2 and iso_alpha_3 codes.
     *
     * This method returns a list of countries with their iso_alpha_2 and iso_alpha_3 codes.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha2AndAlpha3()
    {
        return $this->withNamesAndSlugs()->pluck('iso_alpha_3', 'iso_alpha_2');
    }

    /**
     * Get a list of countries with their iso_alpha_2 codes and emojis.
     *
     * This method returns a list of countries with their iso_alpha_2 codes and emojis.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha2AndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'iso_alpha_2') ?? collect([]);
        return (new FlagEmoji($result));
    }

    /**
     * Get a list of countries with their iso_alpha_3 codes and emojis.
     *
     * This method returns a list of countries with their iso_alpha_3 codes and emojis.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha3AndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'iso_alpha_3') ?? collect([]);
        return (new FlagEmoji($result));

    }

}
