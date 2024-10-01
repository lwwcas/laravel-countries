<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CountryGeographical extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lc_countries_geographical';

    /* @property-read string $localeKey */
    public string $localeKey;

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
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'lc_country_id');
    }

    /**
     * Get the geographical data as a GeoJSON feature collection.
     *
     * @return array
     */
    public function getGeodata()
    {
        $data = [
            'type' => $this->type,
            'features' => [
                'type' => $this->features_type,
                'properties' => json_decode($this->properties, true),
                'geometry' => json_decode($this->geometry, true),
            ],
        ];

        return $data;
    }
}
