<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\Country;

trait HasWhereBorders
{

    /**
     * Find a country by border.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $board
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereBorder($query, string $board)
    {
        $boardInLowercase = Str::lower($board);
        return $query->whereJsonContains('borders', $boardInLowercase);
    }

    /**
     * Find a country by an array of border.
     *
     * @param array $boards
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereBorders($query, array $boards)
    {
        $boardsInLowercase = array_map(fn($lang) => Str::lower($lang), $boards);
        return $query->where(function (Builder $query) use ($boardsInLowercase) {
            foreach ($boardsInLowercase as $board) {
                $query->whereJsonContains('borders', $board);
            }
        });
    }

    /**
     * Returns true if the country has any borders.
     *
     * @return bool True if the country has any borders, false otherwise.
     */
    public function hasBorders(): bool
    {
        return count($this->borders) > 0;
    }

    /**
     * Returns the number of borders of the country.
     *
     * @return int The number of borders.
     */
    public function bordersCount(): int
    {
        return count($this->borders);
    }

    /**
     * Returns an array of countries with which the current country shares a border.
     * Each item in the array is an associative array with the following keys:
     * - `uid`: The UID of the country.
     * - `iso_alpha_2`: The ISO alpha-2 code of the country.
     * - `iso_alpha_3`: The ISO alpha-3 code of the country.
     * - `official_name`: The official name of the country.
     * - `name`: The translated name of the country in the current locale.
     * - `locale`: The locale of the translated name.
     *
     * @return array An array of countries with which the current country shares a border.
     */
    public function bordersWithCountries(): array
    {
        $borderCodes = $this->borders;
        $isoAlpha2 = $this->iso_alpha_2;

        $countries = Country::select('id', 'uid', 'official_name', 'iso_alpha_2', 'iso_alpha_3')
        ->where('iso_alpha_2', '<>', $isoAlpha2)
            ->where(function ($query) use ($borderCodes, $isoAlpha2) {
                foreach ($borderCodes as $borderCode) {
                    $query->orWhere(function ($query) use ($borderCode, $isoAlpha2) {
                        $query->where('iso_alpha_2', Str::upper($borderCode))
                            ->where('borders', 'LIKE', '%' . Str::lower($isoAlpha2) . '%');
                    });
                }
            })
            ->with(['translations' => function ($query) {
                $query->select('lc_country_id', 'name', 'locale');
            }])
            ->get()
            ->map(function ($country) {
                $translation = $country->translations->first();

                return [
                    'uid' => $country->uid,
                    'iso_alpha_2' => $country->iso_alpha_2,
                    'iso_alpha_3' => $country->iso_alpha_3,
                    'official_name' => $country->official_name,
                    'name' => $translation->name ?? null,
                    'locale' => $translation->locale ?? null,
                ];
            })
            ->toArray();

        return $countries;
    }

    /**
     * Get all countries with which the current country shares a border, including a flag emoji.
     *
     * @param string $emojiType The type of emoji to include. Either 'img' or 'unicode'.
     * @return array An array of countries with which the current country shares a border, with each country including:
     *               - `uid`: The unique identifier of the country.
     *               - `iso_alpha_2`: The ISO 3166-1 alpha-2 code of the country.
     *               - `iso_alpha_3`: The ISO 3166-1 alpha-3 code of the country.
     *               - `official_name`: The official name of the country.
     *               - `name`: The translated name of the country in the current locale.
     *               - `locale`: The locale of the translated name.
     *               - `flag_emoji`: The flag emoji of the country in the specified type.
     */
    public function bordersWithFlags(string $emojiType = 'img'): array
    {
        $borderCodes = $this->borders;
        $isoAlpha2 = $this->iso_alpha_2;

        $countries = Country::select('id', 'uid', 'official_name', 'iso_alpha_2', 'iso_alpha_3', 'flag_emoji')
            ->where('iso_alpha_2', '<>', $isoAlpha2)
            ->where(function ($query) use ($borderCodes, $isoAlpha2) {
                foreach ($borderCodes as $borderCode) {
                    $query->orWhere(function ($query) use ($borderCode, $isoAlpha2) {
                        $query->where('iso_alpha_2', Str::upper($borderCode))
                            ->where('borders', 'LIKE', '%' . Str::lower($isoAlpha2) . '%');
                    });
                }
            })
            ->with(['translations' => function ($query) {
                $query->select('lc_country_id', 'name', 'locale');
            }])
            ->get()
            ->map(function ($country) use ($emojiType) {
                $translation = $country->translations->first();

                return [
                    'uid' => $country->uid,
                    'iso_alpha_2' => $country->iso_alpha_2,
                    'iso_alpha_3' => $country->iso_alpha_3,
                    'official_name' => $country->official_name,
                    'name' => $translation->name ?? null,
                    'locale' => $translation->locale ?? null,
                    'flag_emoji' => $country->getFlagEmojiBy('img'),
                ];
            })
            ->toArray();

        return $countries;
    }
}
