<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryExtras extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lc_countries_extras';

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
     * Get the country.
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'lc_country_id');
    }
}
