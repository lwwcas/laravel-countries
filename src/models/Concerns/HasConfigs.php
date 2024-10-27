<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Support\Carbon;

trait HasConfigs
{
    /**
     * Return the key used to store the locale in the model.
     *
     * You can change this value by setting the `locale_key` in the `w-countries` config.
     *
     * @return string
     */
    public function getConfigLocaleKey()
    {
        return config('w-countries.locale_key', 'locale');
    }

    /**
     * Return the value of the `is_cached` option in the `cache` part of the `w-countries` config.
     *
     * @return bool
     */
    public function getConfigIsCache()
    {
        return config('w-countries.cache.is_cached', true);
    }

    /**
     * Return the value of the `prefix` option in the `cache` part of the `w-countries` config.
     *
     * @return string|null
     */
    public function getConfigPrefixCache()
    {
        return config('w-countries.cache.prefix', null);
    }

    /**
     * Return the value of the `small_time` option in the `cache` part of the `w-countries` config.
     *
     * This value is used to determine the short-lived cache duration for some methods.
     *
     * @return Carbon
     */
    public function getConfigSmallTimeCache()
    {
        return config('w-countries.cache.small_time', Carbon::now()->addDays(7));
    }

    /**
     * Return the value of the `big_time` option in the `cache` part of the `w-countries` config.
     *
     * This value is used to determine the long-lived cache duration for some methods.
     *
     * @return Carbon
     */
    public function getConfigBigTimeCache()
    {
        return config('w-countries.cache.big_time', Carbon::now()->addDays(120));
    }
}
