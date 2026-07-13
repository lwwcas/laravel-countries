<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Lwwcas\LaravelCountries\Abstract\CountryModel;

class CountryGeographical extends CountryModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lc_countries_geographical';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lc_country_id',
        'type',
        'features_type',
        'properties',
        'geometry',
    ];

    /**
     * The attributes that should be cast.
     *
     * This section is particularly important due to limitations introduced in Laravel 10.
     * Laravel 10 requires specific handling of attributes to ensure proper type casting
     * and avoid issues such as "Array to string conversion."
     *
     * @var array
     */
    protected $casts = [
        'properties' => 'array',
        'geometry' => 'array',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'properties' => 'array',
            'geometry' => 'array',
        ];
    }

    /**
     * Get the country that owns the CountryGeographical
     */
    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'lc_country_id');
    }

    /**
     * Get the geographical data as a GeoJSON feature collection.
     *
     * @return array
     */
    public function getGeoData()
    {
        $data = [
            'type' => $this->type,
            'features' => [
                'type' => $this->features_type,
                'properties' => $this->properties,
                'geometry' => $this->geometry,
            ],
        ];

        return $data;
    }
}
