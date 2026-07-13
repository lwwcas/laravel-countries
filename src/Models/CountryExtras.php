<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Lwwcas\LaravelCountries\Abstract\CountryModel;

class CountryExtras extends CountryModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lc_countries_extras';

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
        'national_sport',
        'cybersecurity_agency',
        'popular_technologies',
        'internet',
        'religions',
        'international_organizations',
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
        'popular_technologies' => 'array',
        'international_organizations' => 'array',
        'religions' => 'array',
        'internet' => 'array',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'popular_technologies' => 'array',
            'international_organizations' => 'array',
            'religions' => 'array',
            'internet' => 'array',
        ];
    }

    /**
     * Get the country that owns the CountryExtras
     */
    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'lc_country_id');
    }
}
