<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CountryCoordinates extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lc_countries_coordinates';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @property-read string $localeKey
     *
     * @var string
     */
    public string $localeKey;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lc_country_id',
        'latitude',
        'longitude',
        'degrees_with_decimal',
        'degrees_minutes_seconds',
        'degrees_and_decimal_minutes',
        'gps',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'gps' => 'array',
        ];
    }

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

    /**
     * Get the country that owns the CountryGeographical
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'lc_country_id');
    }
}
