<?php

namespace Lwwcas\LaravelCountries\Trait;

use Lwwcas\LaravelCountries\Facades\FlagEmoji;

trait WithPairWhereFunctions
{
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
     * @return \Lwwcas\LaravelCountries\Facades\FlagEmoji
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
     * @return \Lwwcas\LaravelCountries\Facades\FlagEmoji
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
     * @return \Lwwcas\LaravelCountries\Facades\FlagEmoji
     */
    public function officialNameAndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'official_name') ?? collect([]);
        return (new FlagEmoji($result));
    }

    /**
     * Get a list of countries with their iso_alpha_2 codes and ids.
     *
     * This method returns a list of countries with their iso_alpha_2 codes and ids.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha2AndId()
    {
        return $this->withNamesAndSlugs()->pluck('id', 'iso_alpha_2');
    }

    /**
     * Get a list of countries with their iso_alpha_2 codes and UIDs.
     *
     * This method returns a list of countries with their iso_alpha_2 codes and UIDs.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha2AndUid()
    {
        return $this->withNamesAndSlugs()->pluck('uid', 'iso_alpha_2');
    }

    /**
     * Get a list of countries with their iso_alpha_2 codes and names.
     *
     * This method returns a list of countries with their iso_alpha_2 codes and names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha2AndName()
    {
        return $this->withNamesAndSlugs()->pluck('name', 'iso_alpha_2');
    }

    /**
     * Get a list of countries with their iso_alpha_2 codes and official names.
     *
     * This method returns a list of countries with their iso_alpha_2 codes and official names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha2AndOfficialName()
    {
        return $this->withNamesAndSlugs()->pluck('official_name', 'iso_alpha_2');
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
     * @return \Lwwcas\LaravelCountries\Facades\FlagEmoji
     */
    public function alpha2AndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'iso_alpha_2') ?? collect([]);
        return (new FlagEmoji($result));
    }


    /**
     * Get a list of countries with their iso_alpha_3 codes and ids.
     *
     * This method returns a list of countries with their iso_alpha_3 codes and ids.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha3AndId()
    {
        return $this->withNamesAndSlugs()->pluck('id', 'iso_alpha_3');
    }

    /**
     * Get a list of countries with their iso_alpha_3 codes and UIDs.
     *
     * This method returns a list of countries with their iso_alpha_3 codes and UIDs.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha3AndUid()
    {
        return $this->withNamesAndSlugs()->pluck('uid', 'iso_alpha_3');
    }

    /**
     * Get a list of countries with their iso_alpha_3 codes and names.
     *
     * This method returns a list of countries with their iso_alpha_3 codes and names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha3AndName()
    {
        return $this->withNamesAndSlugs()->pluck('name', 'iso_alpha_3');
    }

    /**
     * Get a list of countries with their iso_alpha_3 codes and official names.
     *
     * This method returns a list of countries with their iso_alpha_3 codes and official names.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return Collection
     */
    public function alpha3AndOfficialName()
    {
        return $this->withNamesAndSlugs()->pluck('official_name', 'iso_alpha_3');
    }

    /**
     * Get a list of countries with their iso_alpha_3 codes and emojis.
     *
     * This method returns a list of countries with their iso_alpha_3 codes and emojis.
     * The list is cached for a long time to avoid querying the database too much.
     *
     * @return \Lwwcas\LaravelCountries\Facades\FlagEmoji
     */
    public function alpha3AndEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji', 'iso_alpha_3') ?? collect([]);
        return (new FlagEmoji($result));
    }
}
