<?php

namespace Lwwcas\LaravelCountries\Trait;

use Lwwcas\LaravelCountries\Facades\FlagEmoji;

trait WithOnlyWhereFunctions
{
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
     * @return \Lwwcas\LaravelCountries\Facades\FlagEmoji
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
     * @return \Lwwcas\LaravelCountries\Facades\FlagEmoji
     */
    public function onlyEmoji()
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji') ?? collect([]);
        return (new FlagEmoji($result));
    }

    /**
     * Get a list of flag emojis in a specific format.
     *
     * @param string $type The type of emoji to include. Either 'img', 'utf8', 'utf16', 'html' or 'css'.
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiIn(string $type)
    {
        $result = $this->withNamesSlugsAndFlags()->pluck('flag_emoji') ?? collect([]);
        return $result->pluck($type);
    }

    /**
     * Get a list of country flag emojis as images.
     *
     * This method return a list of country flag emojis as images.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInImg()
    {
        return $this->onlyEmojiIn('img');
    }

    /**
     * Get a list of country flag emojis as UTF-8 strings.
     *
     * This method returns a list of country flag emojis as UTF-8 strings.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInUtf8()
    {
        return $this->onlyEmojiIn('utf8');
    }

    /**
     * Get a list of country flag emojis as UTF-16 strings.
     *
     * This method returns a list of country flag emojis as UTF-16 strings.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInUtf16()
    {
        return $this->onlyEmojiIn('utf16');
    }

    /**
     * Get a list of country flag emojis as HTML entities.
     *
     * This method returns a list of country flag emojis as HTML entities.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInHtml()
    {
        return $this->onlyEmojiIn('html');
    }

    /**
     * Get a list of country flag emojis as CSS values.
     *
     * This method returns a list of country flag emojis as CSS values.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInCss()
    {
        return $this->onlyEmojiIn('css');
    }

    /**
     * Get a list of country flag emojis as hex codes.
     *
     * This method returns a list of country flag emojis as hex codes.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInHex()
    {
        return $this->onlyEmojiIn('hex');
    }

    /**
     * Get a list of country flag emojis as Unicode code points.
     *
     * This method returns a list of country flag emojis as Unicode code points.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInUCode()
    {
        return $this->onlyEmojiIn('uCode');
    }

    /**
     * Get a list of country flag emojis as decimal representations.
     *
     * This method returns a list of country flag emojis as decimal representations.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInDecimal()
    {
        return $this->onlyEmojiIn('decimal');
    }

    /**
     * Get a list of country flag emojis as shortcodes.
     *
     * This method returns a list of country flag emojis as shortcodes.
     * The list is cached for a long time to avoid to query the database too much.
     *
     * @return \Illuminate\Support\Collection
     */
    public function onlyEmojiInShortCode()
    {
        return $this->onlyEmojiIn('shortcode');
    }
}
