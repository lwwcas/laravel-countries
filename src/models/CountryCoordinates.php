<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
            'gps' => 'object',
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
