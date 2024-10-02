<?php

namespace Lwwcas\LaravelCountries\Abstract;

use Illuminate\Database\Eloquent\Model;

abstract class CountryModel extends Model
{
    /**
     * @property-read string $localeKey
     *
     * @var string
     */
    public string $localeKey;

    /**
     * Set the locale key and initialize the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->localeKey = config('w-countries.locale_key', 'locale');

        parent::__construct($attributes);
    }
}
