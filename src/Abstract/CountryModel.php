<?php

namespace Lwwcas\LaravelCountries\Abstract;

use Illuminate\Database\Eloquent\Model;
use Lwwcas\LaravelCountries\Models\Concerns\HasConfigs;
use Lwwcas\LaravelCountries\Models\Concerns\HasConnection;

abstract class CountryModel extends Model
{
    use HasConfigs,
        HasConnection;

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
        $this->localeKey = $this->getConfigLocaleKey();

        parent::__construct($attributes);
    }
}
